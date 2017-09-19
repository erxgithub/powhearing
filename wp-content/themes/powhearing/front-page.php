<?php /* Template Name: front-page */ ?>
<?php
 /* Template Name: front-page */ 
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

<!-- About section-->


<!-- percentage -->


<!-- thank you section -->


<?php get_footer(); ?>
