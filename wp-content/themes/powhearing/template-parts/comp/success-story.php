<!-- <?php echo 'success-story.php'.nl2br("\n"); ?> -->

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $stories = get_post_meta(get_the_ID(), "success_repeat_group");
        //var_dump($stories);
        //echo nl2br("\n");

        if ($stories[0] !== null) {
            foreach($stories[0] as $key => $story)
            {
                ?>

                <div class="success-story">
                    <div>
                        <h1>Success Story: <?php echo $story["title"]; ?></h1>
                    </div>
                    <div>
                        <img src="<?php echo $story["image"]; ?>" />
                    </div>
                    <div>
                        <p><?php echo $story["content"]; ?></p>
                    </div>
                    
                </div>
                <div class="about-div-box flex flex-center  ">
                <p><button class="button" data-open="modalForm">Let's Talk</button></p>
                </div> 

                <?php
            }
        }

        /* echo $story[0][0]["title"].nl2br("\n");?>
        <img src="<?php echo $story[0][0]["image"]; ?>" />
        <?php echo $story[0][0]["content"].nl2br("\n"); */
    ?>

<?php endwhile; // end of the loop. ?>
