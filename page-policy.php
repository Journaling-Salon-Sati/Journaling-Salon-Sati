<?php

/**
 * Template Name: Front Home Page
 */
get_header();
?>

<article>

    <div class="site-contents">
        <div class="contents-area">
            <div class="fade-in-section">
                <div class="flame">
                    <h1 class="contents-about-text">プライバシーポリシー</h1>
                    <div class="image-first">
                        <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/b.jpg" alt=""
                            width="100%" height="auto" />
                    </div>
                    <p class="text">
                        当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を使用しています。このGoogleアナリティクスはデータの収集のためにCookieを使用しています。このデータは匿名で収集されており、個人を特定するものではありません。
                        この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。この規約に関しての詳細は<a
                            href="https://marketingplatform.google.com/about/analytics/terms/jp/" target="_blank"
                            rel="noopener">Googleアナリティクスサービス利用規約のページ</a>や<a
                            href="https://policies.google.com/technologies/ads?hl=ja" target="_blank"
                            rel="noopener">Googleポリシーと規約ページ</a>をご覧ください。

                        <br><br>
                        「ジャーナリングサロン サティ」は、Amazon.co.jpを宣伝しリンクすることによってサイトが紹介料を獲得できる手段を
                        提供することを目的に設定されたアフィリエイトプログラムである、
                        Amazonアソシエイト・プログラムの参加者です。

                    </p>
                </div>
            </div>
        </div>
        <div class=" side-bar">
            <?php get_sidebar(); ?>
        </div>


    </div>
</article>

<?php get_footer(); ?>