<?php 
/* Template Name: live-events */
echo "live-events-page.php <br>"; 
?>

<!-- getting template_part that is setting for each page his content of description -->

  <div>
    <?php get_template_part( 'template-parts/comp/description', 'detail' );?>
  </div>   

<!-- getting template_part that is setting for each page his content of success-story-->

    <div>
      <?php get_template_part('template-parts/comp/success-story'); ?>
    </div>

