<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Webフォント -->
    <!-- Google Fonts（非同期読み込みに変更） -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap">
    </noscript>
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- エンコーディング・レスポンシブ対応 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    })(window, document, 'script', 'dataLayer', 'GTM-KMLMLHV2');
    </script>
    <!-- End Google Tag Manager -->



    <!-- SEO 基本メタ -->
    <meta name="description"
        content="<?php echo is_singular() && get_the_excerpt() ? esc_attr(get_the_excerpt()) : esc_attr(get_bloginfo('description')); ?>">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="<?php echo esc_url(is_singular() ? get_permalink() : home_url()); ?>">

    <!-- 構造化データ（JSON-LD） -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<?php echo is_single() ? 'Article' : 'WebPage'; ?>",
        "headline": "<?php echo esc_html(wp_get_document_title()); ?>",
        "url": "<?php echo esc_url(is_singular() ? get_permalink() : home_url()); ?>",
        "image": "<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(null, 'full')) : esc_url(get_template_directory_uri() . '/images/title.jpg'); ?>",
        "author": {
            "@type": "Organization",
            "name": "Journaling Salon Sati"
        },
        "publisher": {
            "@type": "Organization",
            "name": "<?php bloginfo('name'); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>"
            }
        },
        "description": "<?php echo is_singular() && get_the_excerpt() ? esc_attr(get_the_excerpt()) : esc_attr(get_bloginfo('description')); ?>",
        "datePublished": "<?php echo is_singular() ? get_the_date('c') : ''; ?>",
        "dateModified": "<?php echo is_singular() ? get_the_modified_date('c') : ''; ?>"
    }
    </script>

    <!-- OGP -->
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>">
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta property="og:description"
        content="<?php echo is_singular() && get_the_excerpt() ? esc_attr(get_the_excerpt()) : esc_attr(get_bloginfo('description')); ?>">
    <meta property="og:url" content="<?php echo esc_url(is_singular() ? get_permalink() : home_url()); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:image"
        content="<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(null, 'full')) : esc_url(get_template_directory_uri() . '/images/title.jpg'); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Sati_mindful">
    <meta name="twitter:creator" content="@Sati_mindful">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta name="twitter:description"
        content="<?php echo is_singular() && get_the_excerpt() ? esc_attr(get_the_excerpt()) : esc_attr(get_bloginfo('description')); ?>">
    <meta name="twitter:image"
        content="<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(null, 'full')) : esc_url(get_template_directory_uri() . '/images/title.jpg'); ?>">




    <!-- Favicon / Apple Touch Icon -->

    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon-16x16.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon.png'); ?>">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/site.webmanifest'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.ico'); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KP354QQMSD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KP354QQMSD');
    </script>
    <link rel="preload" as="image"
        href="<?php echo esc_url( get_template_directory_uri() . '/images/title_sp.webp'); ?>" type="image/webp"
        media="(max-width: 767px)">
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() . '/images/title.webp'); ?>"
        type="image/webp" media="(min-width: 768px)">


    <!-- WordPress 必須フック -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMLMLHV2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="site-header">
        <div class="obi">

            <p class="obi-title">
                <a href="<?php echo esc_url( home_url('/') ); ?>">

                    Journaling Salon Sati
                </a>
            </p>

            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <?php
// デフォルト画像
$top_image_pc = get_template_directory_uri() . '/images/title.jpg';
$top_image_webp = get_template_directory_uri() . '/images/title.webp';

// 各固定ページごとの切り替え
if (is_page('yarikata')) {
    $top_image_pc = get_template_directory_uri() . '/images/d.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/d.webp';
} elseif (is_page('profile')) {
    $top_image_pc = get_template_directory_uri() . '/images/profile.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/profile.webp';
} elseif (is_page('koza')) {
    $top_image_pc = get_template_directory_uri() . '/images/koza.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/koza.webp';
} elseif (is_page('thanks')) {
    $top_image_pc = get_template_directory_uri() . '/images/thanks.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/thanks.webp';
} elseif (is_page('tokutei')) {
    $top_image_pc = get_template_directory_uri() . '/images/g.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/g.webp';
} elseif (is_page('policy')) {
    $top_image_pc = get_template_directory_uri() . '/images/a.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/a.webp';
} elseif (is_page('contact')) {
    $top_image_pc = get_template_directory_uri() . '/images/contact.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/contact.webp';
}elseif (is_category()) {
    $top_image_pc = get_template_directory_uri() . '/images/b.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/b.webp';
}elseif (is_page('chosho')) {
    $top_image_pc = get_template_directory_uri() . '/images/c.jpg';
    $top_image_webp = get_template_directory_uri() . '/images/c.webp';
}
?>


<<<<<<< HEAD
        <picture class="header-visual fade-in">
            <?php if ( is_front_page() ) : ?>
            <div class="header-text fade-in">
                <p class="header-title">Journaling Salon Sati</p>
                <p class="header-p">ヴィパッサナー瞑想の修行者によるジャーナリング講座</p>
            </div>
=======

        <picture class="header-visual fade-in">
            <?php if ( is_front_page() ) : ?>
            <p class="header-title  fade-in">
                Journaling Salon Sati
            </p>

            <p class="header-p  fade-in">ヴィパッサナー瞑想の修行者によるジャーナリング講座</p>
>>>>>>> f13841c551ec70e982afd480a07b674d70773420
            <?php endif; ?>
            <source srcset="<?php echo esc_url($top_image_webp); ?>" type="image/webp">
            <img src="<?php echo esc_url($top_image_pc); ?>" alt="<?php bloginfo('name'); ?>">
        </picture>



        <!-- ハンバーガーメニューが開いたときのメニュー本体 -->
        <nav class="hamburger-menu" id="hamburger-menu">


            <p class="menu-p-sp">Menu</p>
            <ul>
                <li><a href="<?php echo esc_url( home_url('/') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">Home</a></li>

                <li><a href="<?php echo esc_url( home_url('/yarikata') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">ジャーナリングとは</a></li>

                <li><a href="<?php echo esc_url( home_url('/koza') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">ジャーナリング講座</a></li>

                <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">講師プロフィール</a></li>

                <li><a href="<?php echo esc_url( home_url('/category/information/') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">お知らせ・ブログ</a></li>

                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">お問合せ</a></li>
            </ul>

        </nav>
    </header>
    <?php sati_breadcrumb(); ?>