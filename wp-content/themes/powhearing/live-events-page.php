<?php
/* Template Name: live events */
echo "live-events-page.php";
?>

<?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/comp/description', 'detail' );
    
endwhile; // End of the loop.
?>

<?php
if(get_field('live-title'))
{ ?>

    <h1 class="organi-title">
    <?php echo '<p>' . get_field('live-title') . '</p>'; ?>
    </h1>

    <p class="organi-content">
    <?php echo '<p>' . get_field('live-content') . '</p>'; ?>
    </p>

<?php } ?>