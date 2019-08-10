<?php
/*
Template Name: page-home
*/
?>

<?php get_header(); ?>

<?php
$profile = get_field("profile");
$selected_clients = get_field("selected_clients");
$education = get_field("education");
$experience = get_field("experience");
$recognitions = get_field("recognitions");
?>

<main>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h3>Hei.</h3>
        </div>
        
        <div class="col-9">
          <h4>I am an art director and designer with over ten years of experience – working within the realms of brand identities and visual communication.</h4>
          <a class="link" href="/#profile">Read full profile</a>
        </div>
      </div>
    </div>
  </div>

  <div class="projects">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php
          $query = new WP_Query(array(
            'posts_per_page'   => 999,
          ));

          while ($query->have_posts()): $query->the_post();
          $client = get_field("client");
          ?>
          <a href="<?php the_permalink(); ?>">
            <div class="project" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>)" data-project="<?php the_title(); ?>">
              <div class="project--overlay">
                  <div class="project--title">
                    <h3><?php the_title(); ?></h3>
                    <h4><?php echo $client; ?></h4>
                  </div>
              </div>
            </div>
          </a>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="profile">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h3>Profile</h3>
        </div>

        <div class="col-9">
          <p><?php echo $profile; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="profile__list">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h3>Selected clients</h3>
          <?php echo $selected_clients; ?>
        </div>
        <div class="col-3">
          <h3>Education</h3>
          <?php echo $education; ?>
        </div>
        <div class="col-3">
          <h3>Experience</h3>
          <?php echo $experience; ?>
        </div>
        <div class="col-3">
          <h3>Recognitions</h3>
          <?php echo $recognitions; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>