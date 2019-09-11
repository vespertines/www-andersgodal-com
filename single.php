<?php get_header(); ?>

<?php
$client = get_field("client");
$cover_image = get_field("cover_image");
$description = get_field("description");
$responsibilities = get_field("responsibilities");
$team = get_field("team");
$image_1 = get_field("image_1");
$image_2 = get_field("image_2");
$image_3 = get_field("image_3");
$image_4 = get_field("image_4");
$image_5 = get_field("image_5");
$image_6 = get_field("image_6");
$image_7 = get_field("image_7");
$image_8 = get_field("image_8");
$image_9 = get_field("image_9");
$image_10 = get_field("image_10");
$image_11 = get_field("image_11");
$image_12 = get_field("image_12");
$image_13 = get_field("image_13");
$image_14 = get_field("image_14");
$image_15 = get_field("image_15");
$image_16 = get_field("image_16");
$image_17 = get_field("image_17");
$image_18 = get_field("image_18");
$image_19 = get_field("image_19");
$image_20 = get_field("image_20");
?>
<script src="https://player.vimeo.com/api/player.js"></script>

<div class="project">
    <div class="project--cover" style="background-image: url(<?php echo $cover_image; ?>)"></div>
    
    <div class="project--detail_1">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-9">
                    <h3><?php echo $client; ?></h3>
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="project--detail_2">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h4>Responsibilities</h4>
                </div>
                <div class="col-9">
                    <span><?php echo $responsibilities; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <h4>Team</h4>
                </div>
                <div class="col-9">
                    <span><?php echo $team; ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="media">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    if( have_rows('media') ):
                        while ( have_rows('media') ) : the_row();
                            if( get_row_layout() == 'image' ):
                                echo '<div class="image"><img src="';
                                the_sub_field('image_url');
                                echo '"></div>';
                            elseif( get_row_layout() == 'vimeo' ):
                                echo '<div class="vimeo-container"><div class="vimeo"><iframe src="https://player.vimeo.com/video/';
                                the_sub_field('vimeo_number');
                                echo '?autoplay=';
                                the_sub_field('autoplay');
                                echo '&loop=';
                                the_sub_field('loop');
                                echo '&quality=1080p" frameBorder="0" allow="autoplay; fullscreen" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div></div>';
                            endif;
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="pagination">
                    <?php 
                        $nextPost = get_next_post();
                        if($nextPost) {
                        $nextPostID = $nextPost->ID;
                    ?>
                    <a class="prev-post" href="<?php echo get_permalink( $nextPostID ); ?>">
                        <?php // echo $nextPost->post_title; ?>
                        Previous
                    </a>
                    <?php } else {
                        $first_post = get_posts( array(
                        'posts_per_page'   => 1,
                        'order' => 'ASC'
                        ) );
                    ?>
                        <a class="prev-post" href="<?php echo get_permalink( $first_post[0]->ID ); ?>">
                        <?php // echo get_the_title( $first_post[0]->ID ); ?>
                        Previous
                        </a>
                    <?php } ?>

                    <?php
                        $prevPost = get_previous_post();
                        if($prevPost) {
                            $prevPostID = $prevPost->ID;
                    ?>
                        <a class="next-post" href="<?php echo get_permalink( $prevPostID ); ?>">
                            <?php // echo $prevPost->post_title; ?>
                            Next
                        </a>
                    <?php } else {
                        $latest_post = get_posts( array(
                            'posts_per_page'   => 1,
                            'order' => 'DESC'
                        ) );
                    ?>
                        <a class="next-post" href="<?php echo get_permalink( $latest_post[0]->ID ); ?>">
                            <?php // echo get_the_title( $latest_post[0]->ID ); ?>
                            Next
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>