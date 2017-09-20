<?php /* Template Name: front-page */ ?>
<?php

echo "front-page.php <br>";
get_header();
?>
<!-- LINKS FOR MODALS -->
<!-- <p><button class="button" data-open="modalProducts">Click me for a modal</button></p> -->
<!-- <p><button class="button" data-open="modalForm">Let's Talk</button></p> -->


<!-- what we do -->
<div>
    <?php get_template_part( 'template-parts/comp/what-we-do', 'detail' );?>
</div> 


<!-- solutions -->

<div>
    <?php get_template_part( 'template-parts/comp/solutions-home', 'detail' ); ?>
</div>


<!-- percentage -->



<!-- About section-->

<div class="gray-back-color">
    <?php get_template_part( 'template-parts/comp/about', 'detail' ); ?>
</div>


<!-- thank you section -->

<?php include 'template-parts/comp/thanks.php';?>

<?php get_footer(); ?>
