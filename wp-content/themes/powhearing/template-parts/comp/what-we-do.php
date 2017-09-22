<!-- What we do component that will present what we do for front page -->


<!-- <?php echo "what-we-do.php <br>";?> -->

<!-- while loop to get -->
<?php while ( have_posts() ) : the_post(); ?>
    <div class="contain">
            <div class="wwd-box">
                <?php $wwd = get_post_meta(get_the_ID(), "wwd_repeat_group"); echo "<br>";?>
                <div>
                    <h1 class="flex flex-jus-cen wwd-head">
                    <?php echo $wwd[0][0]["head"];?>
                    </h1>
                    <div class="wwd-div">
                        <div class="inner-box flex">
                            <div class="wwd-image-div">
                                <img class="wwd-image" src="<?php echo $wwd[0][0]['image1']; ?>" />
                            </div>
                            <div>
                                <div>
                                    <h3 class="wwd-title">
                                    <?php echo $wwd[0][0]["title1"];?>
                                    </h3>
                                </div>
                                <div>
                                    <p class="wwd-content">
                                    <?php echo $wwd[0][0]["content1"];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="inner-box flex">
                            <div class="wwd-image-div">
                                <img class="wwd-image" src="<?php echo $wwd[0][0]['image2']; ?>" />
                            </div>
                            <div>
                                <div>
                                    <h3 class="wwd-title">
                                    <?php echo $wwd[0][0]["title2"];?>
                                    </h3>
                                </div>
                                <div>
                                    <p class="wwd-content">
                                    <?php echo $wwd[0][0]["content2"];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; // end of the loop. ?>
