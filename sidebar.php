<?php
/**
 * @package Journaling Salon Sati
 */
?>



<aside id="secondary" class="site-sidebar">
    <div class="site-sidebar__inner">

        <div class="sidebar-logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                <img class="logo"
                    src="<?php echo esc_url( get_template_directory_uri() . '/images/logo_green_text.png' ); ?>"
                    alt="<?php bloginfo('name'); ?>">
            </a>
        </div>

        <!-- グローバルナビゲーション -->
        <nav class="sidebar-nav">
            <p class="menu-p">Menu</p>
            <ul class="sidebar-menu">
                <li><a href="<?php echo esc_url( home_url('/') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">Home</a></li>

                <li><a href="<?php echo esc_url( home_url('/yarikata') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">ジャーナリングとは</a></li>

                <li><a href="<?php echo esc_url( home_url('/koza') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon_sp" class="menu-icon">ジャーナリング講座</a></li>

                <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">講師プロフィール</a></li>

                <li><a href="<?php echo esc_url( home_url('/category/information/') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">お知らせ・ブログ</a></li>

                <li><a href="<?php echo esc_url( home_url('/chosho') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">著書</a></li>


                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_sp.png' ); ?>"
                            alt="icon" class="menu-icon">お問合せ</a></li>
            </ul>

        </nav>


    </div>

</aside>