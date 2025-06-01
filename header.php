<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
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
            <p class="obi-title"><a href="<?php echo esc_url( home_url('/') ); ?>">Journaling Salon Sati</a></p>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
            <picture class="header-visual">
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/title_sp.webp'); ?>"
                    media="(max-width: 1080px)" type="image/webp">
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/images/title.webp'); ?>"
                    type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/title.jpg'); ?>"
                    alt="Journaling Salon Sati">
            </picture>

        </a>


        <!-- ハンバーガーメニューが開いたときのメニュー本体 -->
        <nav class="hamburger-menu" id="hamburger-menu">
            <ul>
                <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>


                <li><a href="<?php echo esc_url( home_url('/yarikata') ); ?>">ジャーナリングとは</a></li>
                <!-- アンカー内にテキストを入れる -->
                <li><a href="<?php echo esc_url( home_url('/koza') ); ?>">ジャーナリング講座</a></li>
                <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">講師プロフィール</a></li>
                <li><a href="<?php echo esc_url( home_url('/category/information/') ); ?>">お知らせ・ブログ</a></li>
                <!-- 

                <li>
                    <a href="https://mosh.jp/193558/home" target="_blank" rel="noopener noreferrer">MOSH</a>
                </li> -->

                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問合せ</a></li>


            </ul>
        </nav>
    </header>
    <?php sati_breadcrumb(); ?>