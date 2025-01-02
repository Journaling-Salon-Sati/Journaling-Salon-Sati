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

                    <h1 class="contents-about-text">「ジャーナリングサロン サティ」について</h1>
                    <div class="image-first">
                        <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/b.jpg" alt=""
                            width="100%" height="auto" />
                    </div>
                    <p class="text-about">
                        「ジャーナリングサロン サティ」は、「書く瞑想」とも呼ばれるジャーナリングによって、自分の心に光を当て、自己の内面に対する気づきや自己理解を深めるジャーナリング講座を提供しています。
                    </p><br><br><br><br>
                    <div class="flex-border">
                        <h2 class="contents-text">「ジャーナリングサロン サティ」の活動</h2>
                        <div class="right-section">

                        </div>
                    </div>
                    <p class="text-about">
                        ・ジャーナリング講座<br>
                        ジャーナリング講師でヴィパッサナー瞑想の修行者でもある永井陽一朗によるマンツーマンのジャーナリング講座を提供しています。受講者は「書く瞑想」とも呼ばれるジャーナリングを行い、自分の思考を文字にして可視化することで、自己を客観的に観察し、気づきや自己理解を深めます。講師は、ジャーナリングの手法を指導したり、受講者の話を丁寧に聞きながら寄り添い、自発的な気づきを促します。<br>
                        <br>・Webによる情報発信<br>
                        WebサイトやSNSでジャーナリング（書く瞑想）やヴィパッサナー瞑想、マインドフルネス、万年筆について発信しています。<br>
                        <br>・GPTs「ジャーナリング（書く瞑想）の案内人」の提供<br>
                        「ジャーナリング（書く瞑想）の案内人」は、ジャーナリングを通じて自分の内面と向き合い、心を整え、気づきや自己理解を深めるためのサポートを提供するガイドです。マインドフルネスやヴィパッサナー瞑想の要素を取り入れたアプローチで、ユーザーが安心して自己探求に取り組めるよう、ジャーナリング、書く瞑想のヒントを提供します。
                    </p>

                    <a href="https://mosh.jp/services/165971" target="_blank" rel="noopener">
                        <p class="mosh-sidebar">ジャーナリング講座のお申し込み</p>
                    </a>
                    <a href="https://chatgpt.com/g/g-LO00jnKWn-siyanarinku-shu-kuming-xiang-noan-nei-ren-siyanarinkusaron-satei-ti-gong"
                        target="_blank" rel="noopener">
                        <p class="mosh-sidebar">ジャーナリング（書く瞑想）の案内人</p>
                    </a>

                    <a href="https://note.com/sati_mindfulness/" target="_blank" rel="noopener">
                        <p class="mosh-sidebar">note</p>
                    </a>




                </div>
            </div>
        </div>

        <div class="side-bar">
            <?php get_sidebar(); ?>
        </div>


    </div>

</article>

<?php get_footer(); ?>