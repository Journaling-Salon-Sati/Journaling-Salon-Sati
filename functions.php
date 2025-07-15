<?php
/**
 * @package Journaling Salon Sati
 */


/**
 * CSS／JS を読み込む
 */
function sati_enqueue_assets() {
    wp_enqueue_style(
        'destyle',
        get_template_directory_uri() . '/css/destyle.css',
        [],
        filemtime(get_template_directory() . '/css/destyle.css')
    );

    wp_enqueue_style(
        'sati-style',
        get_stylesheet_uri(),
        ['destyle'],
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        [],
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'sati_enqueue_assets', 1);



/**
 * テーマのセットアップ
 */
function sati_theme_setup() {
    // 投稿にアイキャッチ画像（サムネイル）を設定できるようにする
    add_theme_support('post-thumbnails');

    // 一覧用のカードサムネイルサイズ
    add_image_size('information-thumb', 300, 200, true);

    // <title>タグをWordPress側に管理させる
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'sati_theme_setup');

/**
 * 管理バーを非表示にする（ログイン中の上部バー）
 */
add_filter('show_admin_bar', '__return_false');

/**
 * お問い合わせフォーム送信処理
 */
function handle_contact_form_submission() {
    if (
        !isset($_POST["your_name"]) ||
        !isset($_POST["your_email"]) ||
        !isset($_POST["your_message"])
    ) {
        wp_die("フォームに必要な項目が不足しています。");
    }

    $name    = sanitize_text_field($_POST["your_name"]);
    $email   = sanitize_email($_POST["your_email"]);
    $message = sanitize_textarea_field($_POST["your_message"]);

    $to = get_option("admin_email");

    $subject = "【ジャーナリングサロン】お問い合わせが届きました";
    $headers = [
        "Content-Type: text/plain; charset=UTF-8",
        "Reply-To: $name <$email>",
    ];
    $body = "お名前: $name\nメールアドレス: $email\n\nお問い合わせ内容:\n$message";

    wp_mail($to, $subject, $body, $headers);

    $auto_subject = "お問い合わせありがとうございます";
    $auto_body = "{$name} 様\n\n"
        . "このたびはお問い合わせいただき、誠にありがとうございます。\n"
        . "以下の内容で受け付けましたのでご確認ください。\n\n"
        . "――――――――――――――\n"
        . "お問い合わせ内容:\n{$message}\n"
        . "――――――――――――――\n\n"
        . "折り返しご連絡いたしますので、しばらくお待ちください。";

    $auto_headers = [
        "Content-Type: text/plain; charset=UTF-8",
        "From: ジャーナリングサロン サティ <" . get_option("admin_email") . ">",
    ];

    wp_mail($email, $auto_subject, $auto_body, $auto_headers);

    wp_redirect(home_url("/thanks"));
    exit;
}
add_action("admin_post_submit_contact_form", "handle_contact_form_submission");
add_action("admin_post_nopriv_submit_contact_form", "handle_contact_form_submission");

/**
 * パンくずリスト（構造化データ）
 */
function sati_breadcrumb() {
    if (is_front_page()) return;

    global $post;
    $position = 1;
    $items = [];

    $items[] = [
        '@type' => 'ListItem',
        'position' => $position++,
        'name' => 'ホーム',
        'item' => home_url('/')
    ];

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
    } elseif (is_page()) {
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

    echo '<script type="application/ld+json">' . json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}