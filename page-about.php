<?php
/*
Template Name: page-about
*/
?>

<?php get_header(); ?>

<?php
$headline = get_field("headline");
$contact = get_field("contact");
$credit = get_field("credit");
$clients = get_field("clients");
≈
?>

<main class="main--about">
    <div class="row">
        <div class="col-3">
            &nbsp;
        </div>
        <div class="col-6">
            <section>
                <div class="headline">
                    <?php echo $headline; ?>
                </div>
            </section>
            <section>
                <div class="contact">
                <?php echo $contact; ?>
                </div><div class="credit">
                <?php echo $credit; ?>
                </div>
            </section>
            <section>
                <div class="clients">
                    <?php echo $clients; ?>
                </div>
            </section>
            <section class="copyright">
                <?php echo $copyright; ?>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
