<?php /* Template Name: front-page */ ?>
<?php
 /* Template Name: front-page */ 
echo "front-page.php <br>";
get_header();
?>


<div>
    <?php get_template_part( 'template-parts/comp/what-we-do', 'detail' );?>
</div>   



<!-- About section-->
<?php get_template_part( 'template-parts/comp/modal-form', 'detail' );

get_footer(); 
?>
