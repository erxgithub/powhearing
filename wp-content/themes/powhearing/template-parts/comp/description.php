<!-- Description component that will present description for each page -->


<?php
echo "description.php <br>";

//while loop to get description of organizations

if(is_page('organizations', 'page')){ ?>

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
                <div class="flex flex-center">
                    <p><button class="button" data-open="modalForm">Let's Talk</button></p>
                </div>    
            </div>
            
    </div>

    <?php endwhile; // end of the loop. ?>

<?php }

//while loop to get description of live-events

elseif (is_page('live-events' , 'page') ){ ?>

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
            <div class="flex flex-center">
                <p><button class="button" data-open="modalForm">Let's Talk</button></p>
            </div>
        </div>

    </div>

    <?php endwhile; // end of the loop. ?>



<?php }
elseif (is_page('individuals' , 'page') ) {?>

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
                <div class="flex flex-center">
                    <p><button class="button" data-open="modalForm">Let's Talk</button></p>
                </div> 
            </div>

    </div>
    <?php endwhile; // end of the loop. ?>

<?php } ?>
