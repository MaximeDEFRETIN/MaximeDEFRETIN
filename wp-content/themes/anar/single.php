<?php get_header(); ?>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <article class="post">
        <?php the_post_thumbnail(); ?>
        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()): ?>
            <div class="post__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <div class="post__meta">
            <?= get_avatar(get_the_author_meta('ID'), 40); ?>
            <p>Publié le <?php the_date(); ?> par <?php the_author(); ?> dans la catégorie <?php the_category(); ?><?php if (!is_null(the_tags())): ?>, avec les étiquettes <?php the_tags(); endif; ?></p>
        </div>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile; endif; ?>
<?php get_footer();