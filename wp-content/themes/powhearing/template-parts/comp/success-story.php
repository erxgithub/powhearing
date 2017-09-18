<?php echo 'success-stories.php' ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $blah = get_post_meta(get_the_ID(), "wiki_test_repeat_group");
        var_dump($blah);
        echo nl2br("\n");
        if (is_page('organizations', 'page')) {
            echo $blah[0][0]["Success Title"];?>
            <img src="<?php echo $blah[0][0]["image"]; ?>" />
            <?php echo $blah[0][0]["content"];
        }
        else if (is_page('individuals', 'page')) {
            echo $blah[0][0]["Success Title"];?>
            <img src="<?php echo $blah[0][0]["image"]; ?>" />
            <?php echo $blah[0][0]["content"];
        }
        else if (is_page('live-events', 'page')) {
            echo $blah[0][0]["Success Title"];?>
            <img src="<?php echo $blah[0][0]["image"]; ?>" />
            <?php echo $blah[0][0]["content"];
        }
    ?>

<?php endwhile; // end of the loop. ?>
