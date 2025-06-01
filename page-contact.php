<?php
/**
 * @package Journaling Salon Sati
 */
?>



<div class="site-wrapper">
    <!-- サイドバー（左） -->
    <?php get_sidebar(); ?>

    <!-- 右カラム：ヘッダー＋メインコンテンツ -->
    <div class="main-area">
        <?php get_header(); ?>
        <div class="site-content contact-page">
            <main id=" primary" class="main-content">
                <h1 class="komidashi fade-in">お問い合わせ</h1>

                <form class="fade-in" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <p>
                        <label for="your_name">お名前</label><br>
                        <input type="text" id="your_name" name="your_name" required>
                    </p>
                    <p>
                        <label for="your_email">メールアドレス</label><br>
                        <input type="email" id="your_email" name="your_email" required>
                    </p>
                    <p>
                        <label for="your_message">お問い合わせ内容</label><br>
                        <textarea id="your_message" name="your_message" rows="6" required></textarea>
                    </p>
                    <p>
                        <input type="submit" mainue="送信">
                    </p>
                </form>
            </main>
        </div>


        <?php get_footer(); ?>
    </div><!-- /.main-area -->
</div><!-- /.site-wrapper -->