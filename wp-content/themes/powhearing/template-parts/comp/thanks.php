<?php echo 'thanks.php'.nl2br("\n"); ?>

<div class="thanks-section">

<?php while ( have_posts() ) : the_post(); ?>
    <?php
    $thanks = get_post_meta(get_the_ID(), "thanks_repeat_group");
    //var_dump($thanks);
    //echo nl2br("\n");

    if ($thanks[0] !== null) {
        foreach($thanks[0] as $key => $value)
        {
        ?>
            <div class="thanks-box">
                <div class="thanks-quote1">
                    <img src="<?php echo $value["image1"]; ?>" />
                </div>
                <div class="thanks-text">
                    <div>
                        <h1><?php echo $value["heading"]; ?></h1>
                    </div>
                    <div>
                        <h6><?php echo $value["title"]; ?></h6>
                    </div>
                    <div>
                        <p><?php echo $value["message"]; ?></p>
                    </div>
                </div>
                <div class="thanks-quote2">
                    <img src="<?php echo $value["image2"]; ?>" />
                </div>
            </div>

        <?php
        }
    }

    ?>

<?php endwhile; // end of the loop. ?>

</div>
