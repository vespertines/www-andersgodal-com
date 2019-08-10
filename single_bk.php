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
$fc = get_field("fc");
?>

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
                    <?php if ( $image_1 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_1; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_2 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_2; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_3): ?>
                    <div class="image">
                        <img src="<?php echo $image_3; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_4 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_4; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_5 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_5; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_6 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_6; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_7 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_7; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_8): ?>
                    <div class="image">
                        <img src="<?php echo $image_8; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_9 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_9; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_10 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_10; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_15 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_15; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_16 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_16; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_17 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_17; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_18): ?>
                    <div class="image">
                        <img src="<?php echo $image_18; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_19 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_19; ?>">
                    </div>
                    <?php endif; ?>
                    <?php if ( $image_20 ): ?>
                    <div class="image">
                        <img src="<?php echo $image_20; ?>">
                    </div>
                    <?php endif; ?>

                    <?php
                    if( have_rows('media') ):
                        while ( have_rows('media') ) : the_row();
                            if( get_row_layout() == 'image' ):
                                echo '<div class="image"><img src="';
                                the_sub_field('image_url');
                                echo '"></div>';
                            elseif( get_row_layout() == 'vimeo' ):
                                echo '<div class="vimeo-container"><div class="vimeo"><iframe src="';
                                the_sub_field('vimeo_number');
                                echo '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div></div>';
                            endif;
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>