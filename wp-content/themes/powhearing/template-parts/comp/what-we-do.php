<!-- Description component that will present description for each page -->


<?php
echo "what-we-do.php <br>";?>

<!-- while loop to get description of organizations -->
<?php
if(is_page('organizations', 'page')){ ?>

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="box">
            <div class="desc-box">
                <?php $wwd = get_post_meta(get_the_ID(), "wwd_repeat_group"); echo "<br>";?>
                <div>
                    <h1>
                    <?php echo $wwd[0][0]["head"];?>
                    </h1>
                    <div>
                        <div>
                            <h3 class="desc-title">
                            <?php echo $wwd[0][0]["title1"];?>
                            </h3>
                        </div>
                        <div>
                            <p class="desc-content">
                            <?php echo $wwd[0][0]["content1"];?>
                            </p>
                        </div>
                        <div>
                            <img src="<?php echo $wwd["image1"]; ?>" />
                        </div>
                    </div>
                </div>    
            </div>
        </div>

    <?php endwhile; // end of the loop. ?>

<?php } ?>