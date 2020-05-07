<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<div class="container">
    <h1><?php the_title() ?></h1>
    <div class="row">
        <div class="col-lg-6">
            contact form goes here
        </div>
        <div class="col-lg-6">
        <?php get_template_part('includes/section','content') ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
