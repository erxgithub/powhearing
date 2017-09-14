<?php

echo "front-page.php";
get_header();
?>

<?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/comp/description', 'detail' );
endwhile; // End of the loop.
?>

<!-- percentage -->
<?php
if(get_field('percentage_1'))
{
	echo '<p>' . get_field('percentage_1') . '</p>';
}

if(get_field('content_1'))
{
	echo '<p>' . get_field('content_1') . '</p>';
}

if(get_field('percentage_2'))
{
	echo '<p>' . get_field('percentage_2') . '</p>';
}

if(get_field('content_2'))
{
	echo '<p>' . get_field('content_2') . '</p>';
}
?>

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


<!-- cbm2 plugin tester -->
<?php while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/contact-modal', 'detail' );

endwhile; // End of the loop. 

if(get_field('fName'))
{
	echo '<p>' . get_field('fName') . '</p>';
} ?>

<?php get_footer(); ?>
