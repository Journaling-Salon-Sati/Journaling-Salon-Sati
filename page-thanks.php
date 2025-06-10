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
            <main id="primary" class="main-content fade-in">
                <h1 class="komidashi"><img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/icon_green.png'); ?>" alt="icon"
                        class="icon-before-title">お問い合わせいただきありがとうございます。</h1>
                <p>ご入力いただいた内容を確認のうえ、1〜3日以内にご返信させていただきます。<br>しばらくお待ちいただけますと幸いです。<br><br>
                    なお、ご入力いただいたメールアドレス宛に自動返信メールをお送りしております。<br>届いていない場合は、迷惑メールフォルダ等もご確認ください。<br><br>
                    今後ともどうぞよろしくお願いいたします。</p>


            </main>
        </div>


        <?php get_footer(); ?>
    </div><!-- /.main-area -->
</div><!-- /.site-wrapper -->