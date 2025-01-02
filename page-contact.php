<?php

/**
 * Template Name: Front Home Page
 */
get_header();

// メール送信処理
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['contact_submit'])) {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = "kakumeiso@gmail.com";
    $subject = "お問い合わせがありました";
    $headers = "From: kakumeiso@cafefountainpen.site\r\n"; // 余分なスペースを削除
    $headers .= "Reply-To: {$email}\r\n"; // 返信先をユーザーのメールに設定
    $body = "名前: {$name}\nメール: {$email}\n\n内容:\n{$message}";

    // メール送信
    if (wp_mail($to, $subject, $body, $headers)) {
        echo "<p class='contact-success'>お問い合わせありがとうございます。送信が完了しました。</p>";
    } else {
        echo "<p class='contact-error'>送信に失敗しました。再度お試しください。</p>";
    }
}
?>

<article>
    <div class="site-contents">
        <div class="contents-area">
            <div class="fade-in-section">
                <div class="flame">
                    <h1 class="form-text">お問い合わせ</h1>

                    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" class="contact-form">

                        <label for="name">名前</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">メッセージ</label>
                        <textarea class="message" name="message" required></textarea>

                        <button type="submit" name="contact_submit">送信</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="side-bar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>