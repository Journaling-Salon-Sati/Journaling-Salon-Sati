<!DOCTYPE html>
<html lang="en">

<head>

    <?php get_header(); ?>

</head>

<body>

    <?php get_template_part("includes/header"); ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <?php if (is_category()) : ?>
                        <h1>Category</h1>
                        <?php elseif (is author()): ?>
                        <h1>Autor</h1>
                        <?php elseif (is date()): ?>
                        <h1>Date</h1>
                        <?php else : ?>
                        <h1>Tag</h1>
                        <?php endif; ?>
                        <span class="subheading">ブログ<?php wp_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>

                        </h2>
                        <h3 class="post-subtitle">
                            <?php the_excerpt(); ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <?php the_author(); ?>
                        <?php the_time(get_option('date_format')); ?></p>
                </div>
                <hr>
                <?php endwhile; ?>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
        <?php else : ?>
        <p>まだ記事がありません</p>
        <?php endif; ?>

    </div>

    <hr>

    <!-- Footer -->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>

</body>

</html>