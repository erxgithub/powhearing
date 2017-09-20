<?php /* Template Name: front-page */ ?>
<?php

echo "front-page.php <br>";
get_header();
?>
<!-- percentage -->
<?php include('template-parts/comp/percentage-comp.php'); ?>

<?php while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/comp/percentage-comp.php', 'detail' );
endwhile;?>

<?php echo "template part ended"; ?>
<!-- about section -->

<?php

if(get_field('about_heading'))
{
	echo '<h4>' . get_field('about_heading') . '</h4>';
}

$about_pic = get_field('about_pic');

$image = wp_get_attachment_image_src(get_field('image_test'), 'full'); ?>
<img src="<?php echo $about_pic; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />

<?php

if(get_field('about_text')) {

	?>

<div class="about-text">

	<?php echo '<p>' . get_field('about_text') . '</p>';?>

</div>

<?php  }?>

<!-- <?php while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/comp/scenarios_images.php', 'detail' );
endwhile;?> -->

<?php include 'template-parts/comp/scenarios.php';?>



<!-- thank you section -->

<?php if(get_field('thx_head')){ ?>

    <div class="thx_container">
<?php
        $top = get_field('thx_head');
        $bottom = get_field('thx_footer');

        $image = wp_get_attachment_image_src(get_field('thx_footer'), 'full'); ?>
        <div class="quote_logo">
            <img src="<?php echo $top; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
        </div>

        <div class="thx_box">
          <?php   echo '<p>' . get_field('thx_title') . '</p>';
                  echo '<p>' . get_field('thx_content') . '</p>';?>
        </div>

        <?php $image = wp_get_attachment_image_src(get_field('thx_footer'), 'full'); ?>
        
        <div class="quote_logo">
            <img src="<?php echo $bottom; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
        </div>
    </div>

<?php } ?>



<?php get_footer(); ?>


