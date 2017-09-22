<!-- About component that will present about for front page -->

<?php echo "about.php <br>";?>

<!-- while loop to get -->
<?php while ( have_posts() ) : the_post(); ?>
    <div class="contain gray-back-color">
        <div class="about-box">
            <?php $about = get_post_meta(get_the_ID(), "about_repeat_group"); echo "<br>";?>
                <div>
                    <div class="about-div flex flex-dir-col flex-center">
                        <div class="div-about-image">
                            <img class="about-image2 " src="<?php echo $about[0][0]['image']; ?>" />
                        </div>
                        <div class="about-div-box ">
                            <div class="about-image-div">
                                <h3 class="about-title flex flex-center">
                                    <?php echo $about[0][0]["title"];?>
                                </h3>
                            </div>
                            <div class="flex flex-center">
                                <img class="about-image1 " src="<?php echo $about[0][0]['image']; ?>" />
                            </div>
                            <div>
                                <p class="about-content flex flex-center">
                                <?php echo $about[0][0]["content"];?>
                                </p>
                                <div class="div-button">
                                    <button class="button" data-open="modalForm">Let's Talk</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>    
        </div>
    </div>

    <?php endwhile; // end of the loop. ?>