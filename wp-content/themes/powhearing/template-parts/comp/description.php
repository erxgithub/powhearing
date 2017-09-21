<!-- Description component that will present description for each page -->

<?php echo "description.php <br>";?>

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="box">
            <div class="desc-box">
                <?php $blah = get_post_meta(get_the_ID(), "description_repeat_group"); echo "<br>";?>
                <div>
                    <h1 class="desc-title">
                    <?php echo $blah[0][0]["title"];?>
                    </h1>
                </div>
                <div>
                    <p class="desc-content">
                    <?php echo $blah[0][0]["content"];?>
                    </p>
                </div>
                <div class="about-div-box flex flex-center">
                    <p><button class="button" data-open="modalForm">Let's Talk</button></p>
                </div>
            </div>

    </div>

    <?php endwhile; // end of the loop. ?>
