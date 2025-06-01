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
                <h1 class="komidashi fade-in"><?php single_cat_title(); ?></h1>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'cat' => get_queried_object_id(),
                    'posts_per_page' => 9,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                );
                $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                <div class="card-grid fade-in">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="card">
                        <?php if (has_post_thumbnail()) : ?>
                        <div class="card-thumb">
                            <?php the_post_thumbnail('information-thumb', ['alt' => get_the_title()]); ?>
                        </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <div class="card-meta">
                                <time class="card-date"><?php echo get_the_date('Y.m.d'); ?></time>
                                <?php
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<span class="card-tag">' . esc_html($tag->name) . '</span>';
                                    }
                                }
                                ?>
                            </div>
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-excerpt">
                                <?php
                                $excerpt = get_post_field('post_excerpt', get_the_ID());

                                if ($excerpt) {
                                    echo wp_kses_post($excerpt);
                                } else {
                                    $content = get_post_field('post_content', get_the_ID());
                                    $text = mb_substr(strip_tags($content), 0, 120);
                                    echo esc_html($text) . '…';
                                }
                                ?>
                            </p>
                        </div> <!-- /.card-body -->
                    </a> <!-- /.card -->
                    <?php endwhile; ?>
                </div> <!-- /.card-grid -->

                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'prev_text' => '« 前へ',
                        'next_text' => '次へ »',
                    ));
                    ?>
                </div>

                <?php else : ?>
                <p class="fade-in">まだ記事がありません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </main>
        </div>

        <?php get_footer(); ?>
    </div>
</div>