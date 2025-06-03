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
            <main id="primary" class="main-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="single-post">
                    <h1 class="komidashi"><img
                            src="<?php echo esc_url(get_template_directory_uri() . '/images/icon_green.png'); ?>"
                            alt="icon" class="icon-before-title"><?php the_title(); ?></h1>

                    <div class="post-meta">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<span class="post-tag">' . esc_html($tag->name) . '</span>';
                                }
                            }
                            ?>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumb">
                        <?php the_post_thumbnail('large', ['class' => 'featured-image']); ?>
                    </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php endwhile; endif; ?>
            </main>
        </div>

        <?php get_footer(); ?>
    </div><!-- /.main-area -->
</div><!-- /.site-wrapper -->