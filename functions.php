<?php
// アイキャッチ画像を取得し、設定されていない場合にデフォルト画像を返す関数
function get_eyecatch_with_default()
{
    if (has_post_thumbnail()) {
        return get_the_post_thumbnail(null, 'full');
    } else {
        // デフォルトの画像のURLを設定します
        $default_image = get_template_directory_uri() . '/images/default.jpg';
        return '<img src="' . $default_image . '" alt="デフォルト画像">';
    }
}

// テーマのスタイルシートとJavaScriptをエンキューする関数
function my_theme_enqueue_assets()
{
    // CSSファイルを読み込む
    wp_enqueue_style('destyle', get_template_directory_uri() . '/css/destyle.css');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');

    // JavaScriptファイルを読み込む
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// 管理バーを画面の下部に移動する関数
function move_admin_bar_to_bottom()
{
    if (is_admin_bar_showing()) {
        echo '
        <style type="text/css">
            body.admin-bar #wpadminbar {
                top: auto !important;
                bottom: 0 !important;
                position: fixed !important;
            }
            body.admin-bar #wpcontent,
            body.admin-bar #adminmenu,
            body.admin-bar #wpfooter,
            html,
            body {
                padding-top: 0 !important;
                margin-top: 0 !important;
            }
            body.admin-bar #wpcontent {
                padding-bottom: 32px;
            }
            body.admin-bar #wpfooter {
                padding-bottom: 32px;
            }
            @media screen and (max-width: 782px) {
                body.admin-bar #wpadminbar {
                    position: fixed;
                }
                body.admin-bar #wpcontent {
                    padding-bottom: 46px;
                }
                body.admin-bar #wpfooter {
                    padding-bottom: 46px;
                }
            }
        </style>
        ';
    }
}
add_action('wp_head', 'move_admin_bar_to_bottom');

// サイドバーを登録する関数
function my_theme_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Primary Sidebar',
        'id'            => 'primary-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

// アイキャッチ画像のサポートを有効にする
add_theme_support('post-thumbnails');

// カスタム画像サイズを追加する
function my_custom_image_sizes()
{
    add_image_size('custom-size', 800, 600, true); // 幅800px、高さ600px、切り抜き（trueの場合はハードクロップ）
}
add_action('after_setup_theme', 'my_custom_image_sizes');

// Ajaxによるメール送信処理
function custom_contact_form_handler() {
    // データのサニタイズ
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // 管理者宛のメールの設定
    $to = "kakumeiso@gmail.com";
    $subject = "お問い合わせがありました";
    $headers = "From: kakumeiso@cafefountainpen.site\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $body = "名前: {$name}\nメール: {$email}\n\n内容:\n{$message}";

    // 管理者宛のメール送信
    $admin_email_sent = wp_mail($to, $subject, $body, $headers);

    // ユーザーへの自動応答メールの設定
    $user_subject = "お問い合わせありがとうございます";
    $user_body = "{$name} 様\n\nこの度は「ジャーナリングサロン サティ」にお問い合わせいただきありがとうございます。\n以下の内容でお問い合わせを受け付けました。\n\n---\n【お問い合わせ内容】\n{$message}\n---\n\n内容を確認の上、追ってご連絡いたしますので、少々お待ちください。\n\nどうぞよろしくお願いいたします。\n\nジャーナリングサロン サティ\nWebサイト: https://cafefountainpen.site/\nメール: kakumeiso@cafefountainpen.site";
    $user_headers = "From: kakumeiso@cafefountainpen.site\r\n";

    // ユーザー宛の自動応答メール送信
    $user_email_sent = wp_mail($email, $user_subject, $user_body, $user_headers);

    // 成功・失敗メッセージのレスポンス
    if ($admin_email_sent && $user_email_sent) {
        wp_send_json_success("お問い合わせありがとうございます。送信が完了しました。");
    } else {
        wp_send_json_error("送信に失敗しました。再度お試しください。");
    }

    wp_die(); // 終了
}
add_action('wp_ajax_custom_contact_form', 'custom_contact_form_handler');
add_action('wp_ajax_nopriv_custom_contact_form', 'custom_contact_form_handler');

// JavaScriptファイルの読み込み
function custom_contact_form_scripts() {
    wp_enqueue_script('custom-contact-form-js', get_template_directory_uri() . '/js/custom-contact-form.js', array('jquery'), null, true);
    wp_localize_script('custom-contact-form-js', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'custom_contact_form_scripts');