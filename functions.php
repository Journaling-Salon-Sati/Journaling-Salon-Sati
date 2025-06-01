<?php
/**
 * @package Journaling Salon Sati
 */
?>


<?php
/**
 * テーマのセットアップ
 */

 add_action( 'wp_enqueue_scripts', 'sati_enqueue_assets', 1 );

function sati_theme_setup() {
    // 投稿にアイキャッチ画像（サムネイル）を設定できるようにする
    add_theme_support( 'post-thumbnails' );

    // 【ここを追加】一覧用のカードサムネイルサイズ
    add_image_size( 'information-thumb', 300, 200, true );

    // <title>タグをWordPress側に管理させる
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'sati_theme_setup' );

add_theme_support( 'title-tag' );

/**
 * CSS／JS を読み込む
 */
function sati_enqueue_assets() {
    // リセットCSS（destyle.css）を読み込む
    wp_enqueue_style(
        'destyle',
        get_template_directory_uri() . '/css/destyle.css',
        [],
        filemtime( get_template_directory() . '/css/destyle.css' ) // キャッシュ対策で更新日時をバージョンに
    );

    // メインのスタイル（style.css）を読み込む
    wp_enqueue_style(
        'sati-style',
        get_stylesheet_uri(),
        ['destyle'], // destyle.css のあとに読み込む
        filemtime( get_stylesheet_directory() . '/style.css' ) // キャッシュ対策
    );

    // 自作JavaScript（main.js）をフッターで読み込む
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        [],
        filemtime( get_template_directory() . '/js/main.js' ), // キャッシュ対策
        true // フッターで読み込み
    );
}
add_action( 'wp_enqueue_scripts', 'sati_enqueue_assets' );


/**
 * 管理バーを非表示にする（ログイン中の上部バー）
 */
add_filter( 'show_admin_bar', '__return_false' );


/**
 * お問い合わせフォーム送信処理
 * admin-post.php 経由で送信された内容を受け取り、メールを送信し、thanksページへリダイレクトする
 */
function handle_contact_form_submission() {
    // 必須項目がセットされていなければエラー表示
    if (
        !isset($_POST["your_name"]) ||
        !isset($_POST["your_email"]) ||
        !isset($_POST["your_message"])
    ) {
        wp_die("フォームに必要な項目が不足しています。");
    }

    // 各フィールドの入力値をサニタイズ
    $name    = sanitize_text_field( $_POST["your_name"] );
    $email   = sanitize_email( $_POST["your_email"] );
    $message = sanitize_textarea_field( $_POST["your_message"] );

    // メール送信先（WordPressの管理者メール）
    $to = get_option( "admin_email" );

    // ────────────────
    // 管理者宛メール送信
    // ────────────────
    $subject = "【ジャーナリングサロン】お問い合わせが届きました";
    $headers = [
        "Content-Type: text/plain; charset=UTF-8",
        "Reply-To: $name <$email>",
    ];
    $body = "お名前: $name\nメールアドレス: $email\n\nお問い合わせ内容:\n$message";

    wp_mail( $to, $subject, $body, $headers );

    // ────────────────
    // 送信者宛の自動返信メール送信
    // ────────────────
    $auto_subject = "お問い合わせありがとうございます";
    $auto_body    = "{$name} 様\n\n"
                  . "このたびはお問い合わせいただき、誠にありがとうございます。\n"
                  . "以下の内容で受け付けましたのでご確認ください。\n\n"
                  . "――――――――――――――\n"
                  . "お問い合わせ内容:\n{$message}\n"
                  . "――――――――――――――\n\n"
                  . "折り返しご連絡いたしますので、しばらくお待ちください。";
    $auto_headers = [
        "Content-Type: text/plain; charset=UTF-8",
        // 送信元アドレスを管理者メールにするか独自ドメインにすると信頼度アップ
        "From: ジャーナリングサロン サティ <" . get_option("admin_email") . ">",
    ];

    wp_mail( $email, $auto_subject, $auto_body, $auto_headers );

    // 送信後、thanksページにリダイレクト
    wp_redirect( home_url( "/thanks" ) );
    exit;
}


// フォームの action="submit_contact_form" で指定した処理名に対応させる
add_action("admin_post_submit_contact_form", "handle_contact_form_submission"); // ログインユーザー用
add_action("admin_post_nopriv_submit_contact_form", "handle_contact_form_submission"); // 非ログインユーザー用
function sati_breadcrumb() {
    if (is_front_page()) return;

    global $post;
    $position = 1;
    $items = [];

    // ホーム
    $items[] = [
        '@type' => 'ListItem',
        'position' => $position++,
        'name' => 'ホーム',
        'item' => home_url('/')
    ];

    // 投稿ページ
    if (is_single()) {
        $categories = get_the_category();
        if (!empty($categories)) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => $categories[0]->name,
                'item' => get_category_link($categories[0]->term_id)
            ];
        }
        $items[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => get_the_title(),
            'item' => get_permalink()
        ];
    }
    // 固定ページ
    elseif (is_page()) {
        $ancestors = array_reverse(get_post_ancestors($post));
        foreach ($ancestors as $ancestor_id) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => get_the_title($ancestor_id),
                'item' => get_permalink($ancestor_id)
            ];
        }
        $items[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => get_the_title(),
            'item' => get_permalink()
        ];
    }

    // JSON-LD出力（画面表示なし）
    echo '<script type="application/ld+json">' . json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}