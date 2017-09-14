<?php
echo "front-page.php";
get_header();
?>

<?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/comp/description', 'detail' );


endwhile; // End of the loop.
?>



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
