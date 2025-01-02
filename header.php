<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KMBBQQJ6');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php 
if (is_singular()) {
    $excerpt = strip_tags(get_the_excerpt());
    echo $excerpt ? $excerpt : bloginfo('description');
} else {
    bloginfo('description');
}
?>">



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QYG58XXVCS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QYG58XXVCS');
    </script>


    <!-- Title Tag -->
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>


    <!-- Profile Link -->
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&family=Zen+Maru+Gothic:wght@300&display=swap"
        rel="stylesheet">


    <!-- OGP Meta Tags -->
    <meta property="og:title"
        content="<?php echo is_singular() ? wp_title('') : bloginfo('name') . ' | あなたのためのジャーナリング情報'; ?>" />

    <meta property="og:description" content="<?php if (is_single() || is_page()) {
                                                    echo strip_tags(get_the_excerpt());
                                                } else {
                                                    bloginfo('description');
                                                } ?>" />
    <meta property="og:type" content="<?php if (is_single() || is_page()) {
                                            echo 'article';
                                        } else {
                                            echo 'website';
                                        } ?>" />
    <meta property="og:url" content="<?php echo esc_url(is_singular() ? get_permalink() : home_url('/')); ?>" />

    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/images/title.jpg" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:locale" content="ja_JP" />

    <?php wp_head(); ?>
    <link rel="canonical" href="<?php 
if (is_front_page() || is_home()) {
    echo home_url();
} else {
    echo get_permalink();
}
?>" />

    <!-- Event snippet for 購入 conversion page -->
    <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-969334436/AKDACMCv6ZUZEKS9m84D',
        'transaction_id': ''
    });
    </script>


</head>


<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMBBQQJ6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>


        <div class="obi-sp">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <p class="obi-sp-p">ジャーナリングサロン サティ</p>
            </a>
            <!-- Menu icon -->
            <div class="menu-icon">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>



        <!-- Slide out menu -->
        <nav id="slide-menu" class="slide-menu">
            <!-- メニューの内容をここに追加 -->
            <ul>
                <li class="list"><a href="<?php echo esc_url(home_url('/')); ?>">・ジャーナリング講座</a></li>

                <li class="list"><a href="<?php echo esc_url(home_url('/about')); ?>">・「ジャーナリングサロン サティ」について</a></li>





                <li class="list"><a href="<?php echo esc_url(home_url('/yarikata')); ?>">・ジャーナリングのやり方と効果</a></li>

                <li class="list"><a href="<?php echo esc_url(home_url('/muishikinoishikika')); ?>">・ジャーナリングと無意識の意識化</a>
                </li>
                <li class="list"><a href="<?php echo esc_url(home_url('/ninchi')); ?>">・ジャーナリングと認知行動療法</a></li>
                <li class="list">
                    <a href="<?php echo esc_url(home_url('/mindfulness')); ?>">・ジャーナリングとマインドフルネス｜離見の見
                </li>
                <li class="list"><a href="<?php echo esc_url(home_url('/hikki')); ?>">・ジャーナリングに最適な筆記具</a>
                </li>
                <li class="list"><a href="<?php echo esc_url(home_url('/profile')); ?>">・ジャーナリングで緩和した発達障害の苦しみ</a></li>
                <li class="list"><a href="<?php echo esc_url(home_url('/sati')); ?>">・ジャーナリング、ヴィパッサナー瞑想との出会い</a>
                </li>

                <li class="list"><a
                        href="https://chatgpt.com/g/g-LO00jnKWn-siyanarinku-shu-kuming-xiang-noan-nei-ren-siyanarinkusaron-satei-ti-gong">
                        ・ジャーナリング（書く瞑想）の案内人 GPTs</a></li>

                <li class="list"><a href="<?php echo esc_url(home_url('/contact')); ?>">
                        ・お問い合わせ
                    </a>
                </li>
                <!-- カテゴリースラッグを指定 -->
            </ul>
            <div class="note">
                <a href="https://note.com/sati_mindfulness/" target="_blank" rel="noopener">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" width="20%"
                        height="auto" />

                </a>
            </div>

        </nav>



        <div class="obi">
            <p class="obi-p">Journaling Salon Sati</p>

        </div>



        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="title-img" src="<?php echo get_template_directory_uri(); ?>/images/title.jpg" alt="タイトル">
                <img class="title-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/title.jpg" alt="タイトル">
            </a>


        </div>




    </header>