<!-- Description component that will present description for each page -->


<?php
echo "description.php <br>";

//while loop to get description of organizations

if(is_page('organizations', 'page')){ ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <div class="organi-box">
            <?php
                $blah = get_post_meta(get_the_ID(), "wiki_test_repeat_group");
                echo "<br>";?>
            <h1 class="organi-title">
                <?php echo $blah[0][0]["Title"];?>
            </h1>
            <p class="organi-content">
                <?php echo $blah[0][0]["content"];?>
            </p>
        </div>

    <?php endwhile; // end of the loop. ?>

<?php }

//while loop to get description of live-events

elseif (is_page('live-events' , 'page') ){ ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <div class="live-box">
        <?php
            $blah = get_post_meta(get_the_ID(), "wiki_test_repeat_group");
            echo "<br>";?>
        <h1 class="live-title">
            <?php echo $blah[0][0]["Title"];?>
        </h1>
        <p class="live-content">
            <?php echo $blah[0][0]["content"];?>
        </p>
        </div>

    <?php endwhile; // end of the loop. ?>



</div>

    
<?php }
elseif (is_page('individuals' , 'page') ) {?>

    <?php while ( have_posts() ) : the_post(); ?>
        <div class="indiv-box">
        <?php
            $blah = get_post_meta(get_the_ID(), "wiki_test_repeat_group");
            echo "<br>";?>
        <h1 class="indiv-title">
            <?php echo $blah[0][0]["Title"];?>
        </h1>
        <p class="indiv-content">
            <?php echo $blah[0][0]["content"];?>
        </p>
        </div>

    <?php endwhile; // end of the loop. ?>
    
<?php } ?>