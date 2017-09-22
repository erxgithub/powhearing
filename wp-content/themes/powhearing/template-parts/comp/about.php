<!-- About component that will present about for front page -->

<?php echo "about.php <br>";
$about = get_post_meta(get_the_ID(), "about_repeat_group");
$about_title = $about[0][0]["title"];
$about_content = $about[0][0]["content"]?>
<!-- while loop to get -->
<?php while ( have_posts() ) : the_post(); ?>
    <div class="contain gray-back-color">

        <div class="row column flex">
            <div class="large-4 small-12 about-image">
                <img class=" " src="<?php echo $about[0][0]['image']; ?>" />
            </div>
            <div class="large-8 small-12 about-content">
                <h4><?php  echo $about_title ?> </h4>
                <p> <?php echo $about_content ?> </p>
            </div>
        </div>
    </div>

    <?php endwhile; // end of the loop. ?>
