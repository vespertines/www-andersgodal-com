<?php
/*
Template Name: page-projects
*/
?>

<?php get_header(); ?>

<div class="project-name">sss</div>

<main>
    <div class="boxes">
        <?php
        $query = new WP_Query(array(
            'posts_per_page'   => 999,
        ));

        while ($query->have_posts()): $query->the_post();
        ?>
        <div class="box" data-project="<?php the_title(); ?>">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('original'); ?></a>
        </div>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
