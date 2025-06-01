<?php
/**
 * @package Journaling Salon Sati
 */
?>



<aside id="secondary" class="site-sidebar">
    <div class="site-sidebar__inner">

        <!-- ロゴアイコン -->
        <div class="sidebar-logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                <img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>"
                    alt="<?php bloginfo('name'); ?>" width="240" height="240">
            </a>
        </div>

        <!-- グローバルナビゲーション -->
        <nav class="sidebar-nav">
            <ul class="sidebar-menu">
                <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>


                <li><a href="<?php echo esc_url( home_url('/yarikata') ); ?>">ジャーナリングとは</a></li>
                <!-- アンカー内にテキストを入れる -->
                <li><a href="<?php echo esc_url( home_url('/koza') ); ?>">ジャーナリング講座</a></li>
                <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">講師プロフィール</a></li>

                <li><a href="<?php echo esc_url( home_url('/category/information/') ); ?>">お知らせ・ブログ</a></li>


                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問合せ</a></li>


            </ul>

        </nav>


    </div>

</aside>