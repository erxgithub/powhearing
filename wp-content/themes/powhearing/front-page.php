<?php /* Template Name: front-page */ ?>
<?php
 /* Template Name: front-page */ 
echo "front-page.php <br>";
get_header();
?>


<div>
    <?php get_template_part( 'template-parts/comp/what-we-do', 'detail' );?>
</div>   

<?php $image = wp_get_attachment_image_src(get_field('thx_footer'), 'full'); ?>
        
<div class="quote_logo">
      <img src="<?php echo $bottom; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
</div>

<!-- About section-->
<?php
get_template_part( 'template-parts/comp/modal-form', 'detail' );

get_footer(); 
?>
