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

        <div id="content" class="site-content">
            <main id="primary" class="main-content fade-in">

                <h1 class="komidashi"><img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/icon_green.png'); ?>" alt="icon"
                        class="icon-before-title">プライバシーポリシー</h1>

                <p>
                    「Journaling Salon
                    Sati」では、Googleによるアクセス解析ツール「Googleアナリティクス」を使用しています。このGoogleアナリティクスはデータの収集のためにCookieを使用しています。このデータは匿名で収集されており、個人を特定するものではありません。
                    この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。この規約に関しての詳細は<a class="policy"
                        href="https://marketingplatform.google.com/about/analytics/terms/jp/" target="_blank"
                        rel="noopener">Googleアナリティクスサービス利用規約のページ</a>や<a class="policy"
                        href="https://policies.google.com/technologies/ads?hl=ja" target="_blank"
                        rel="noopener">Googleポリシーと規約ページ</a>をご覧ください。

                    <br><br>
                    「Journaling Salon Sati」は、Amazon.co.jpを宣伝しリンクすることによってサイトが紹介料を獲得できる手段を
                    提供することを目的に設定されたアフィリエイトプログラムである、
                    Amazonアソシエイト・プログラムの参加者です。
                </p>
            </main>
        </div>

        <?php get_footer(); ?>
    </div><!-- /.main-area -->
</div><!-- /.site-wrapper -->