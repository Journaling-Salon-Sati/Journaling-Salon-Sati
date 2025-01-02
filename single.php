<?php get_header(); ?>



<div class="flame-category">

    <div class="contents-area-category">
        <div class="fade-in-section">
            <div class="flame" id="b">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail-wrapper">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('custom-size', array('class' => 'custom-thumbnail')); // カスタムサイズの画像を表示 
                                    ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="flame-entry">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-contents">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>



                <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <div class="side-bar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>