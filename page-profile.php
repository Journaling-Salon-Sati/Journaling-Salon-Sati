<?php
/**
 * @package Journaling Salon Sati
 */
?>


<div class="site-wrapper">

    <?php get_sidebar(); ?>

    <div class="main-area">
        <?php get_header(); ?>

        <div id="content" class="site-content">
            <main id="primary" class="main-content fade-in">
                <h1 class="komidashi"><img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/icon_green.png'); ?>" alt="icon"
                        class="icon-before-title">講師プロフィール</h1>
                <p class=" profile ">
                    <strong><ruby>永<rt>なが</rt>井<rt>い</rt> 陽<rt>よう</rt>一<rt>いち</rt>朗<rt>ろう</rt></ruby></strong>
                <p>
                <p>ジャーナリングサロン サティ代表</p>
                <p>ジャーナリング講師</p>
                <p>ヴィパッサナー瞑想協会ボランティアスタッフ</p>
                <br>

                <p>
                    ヴィパッサナー瞑想の修行とジャーナリング（書く瞑想）の実践を通じて、心の苦しみが和らぎ、内面の大きな変化を体験しました。この体験をもとに、悩みや苦しみを抱える方、ジャーナリングを必要としている方に向けて、ジャーナリング講座を開講しています。
                </p>
                <a class="button" href="<?php echo esc_url( home_url('/koza') ); ?>">ジャーナリング講座</a>

            </main>
        </div>

        <?php get_footer(); ?>
    </div>
</div>