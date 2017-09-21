<?php echo 'percentage.php'.nl2br("\n"); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $percentages = get_post_meta(get_the_ID(), "percentage_repeat_group");
        
        ?>

            

                <div class="flex banner flex-center" style="background-image: url('<?php echo $percentages[0][0]["image"]; ?>');"> 
                
                    <div class="banner-item">

                        <div class="box1">
                        <h1 class="font-white"><?php echo $percentages[0][0]["percentage1"]; ?></h1>
                       
                        <h5 class="font-white"><?php echo $percentages[0][0]["title1"]; ?></h5>
                        </div>

                    </div> 

                    <div class="banner-item"> 

                        <div class="box2">

                            <div class="border">
                            <h1 class="font-white"><?php echo $percentages[0][0]["percentage2"]; ?></h1>
                            </div>
                       
                            <h5 class="font-white"><?php echo $percentages[0][0]["title2"]; ?></h5>
                        </div>
                       
                    </div>

                </div>

            

            <?php
        
        /* echo $story[0][0]["title"].nl2br("\n");?>
        <img src="<?php echo $story[0][0]["image"]; ?>" />
        <?php echo $story[0][0]["content"].nl2br("\n"); */
    ?>

<?php endwhile; // end of the loop. ?>