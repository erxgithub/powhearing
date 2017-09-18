<?php /* Template Name: organizations */ ?>
<?php get_header(); ?>

<?php echo 'page-organizations.php'; ?>
<div>
    <?php
        get_template_part('template-parts/comp/success-story');
    ?>
</div>

<?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/comp/description', 'detail' );
endwhile; // End of the loop.
?>

<?php
if(get_field('organi-title'))
{ ?>

    <h1 class="organi-title">
    <?php echo '<p>' . get_field('organi-title') . '</p>'; ?>
    </h1>


    <p class="organi-content">
    <?php echo '<p>' . get_field('organi-content') . '</p>'; ?>
    </p>

<?php } ?>

<?php get_footer(); ?>
