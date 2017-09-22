<?php
/* Template Name: individuals */
//echo "page-individuals.php <br>";
?>

<?php get_header(); ?>

<!-- getting template_part that is setting for each page his content of description-->

<div>
  <?php get_template_part( 'template-parts/comp/description', 'detail' );?>

</div>

<!-- getting template_part that is setting for each page his content of description-->

<div>
  <?php get_template_part( 'template-parts/comp/individual-services', 'detail' );?>

</div>

<!-- getting template_part that is setting for each page his content of success-story-->

<div>
    <?php get_template_part('template-parts/comp/success-story'); ?>
</div>




<?php get_footer(); ?>
