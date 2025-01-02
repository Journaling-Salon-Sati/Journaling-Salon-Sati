<?php get_header(); ?>
<div class="fade-in-section">
    <div class="flame-category">
        <div class="contents-area-category">
            <?php if (have_posts()) : ?>
            <header class="page-header">
                <div class="page-title-wrapper">
                    <h1 class="page-title"><?php single_cat_title(); ?></h1>
                    <?php
                        // カテゴリの説明があれば表示
                        $category_description = category_description();
                        if ($category_description) {
                            echo '<div class="category-description">' . $category_description . '</div>';
                        }
                        ?>
                </div>
            </header><!-- .page-header -->

            <div class="posts-grid-wrapper">
                <div class="posts-grid">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="post-wrapper">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail-wrapper">
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('custom-size', array('class' => 'custom-thumbnail')); // カスタムサイズの画像を表示 
                                                    ?>
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="flame-entry">
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="entry-contents">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div><!-- .posts-grid -->
            </div><!-- .posts-grid-wrapper -->

            <div class="pagination">
                <?php
                    // ページネーションを表示
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'end_size'  => 2,
                        'prev_text' => __('« Prev'),
                        'next_text' => __('Next »'),
                    ));
                    ?>
            </div>

            <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>

        <div class="side-bar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>