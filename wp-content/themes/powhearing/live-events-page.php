<?php
/* Template Name: live events */
echo "live-events-page.php <br>";
?>

<?php 
    get_template_part( 'template-parts/comp/description', 'detail' );
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