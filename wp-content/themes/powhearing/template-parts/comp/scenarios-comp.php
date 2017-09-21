<?php echo 'scenarios-comp.php'.nl2br("\n"); ?>

<div class="scenarios-section">
    <h1>Scenarios</h1>

    <div class="scenarios-grid">

<?php while ( have_posts() ) : the_post(); ?>
        <?php
        $scenarios = get_post_meta(get_the_ID(), "scenarios_repeat_group");
        //var_dump($scenarios);
        //echo nl2br("\n");

        if ($scenarios[0] !== null) {
            foreach($scenarios[0] as $key => $scenario)
            {
            ?>

                <div class="scenario-box">
                    <div>
                        <img src="<?php echo $scenario["image"]; ?>" />
                    </div>
                    <div>
                        <h2><?php echo $scenario["title"]; ?></h2>
                    </div>
                </div>

            <?php
            }
        }

        /* echo $story[0][0]["title"].nl2br("\n");?>
        <img src="<?php echo $story[0][0]["image"]; ?>" />
        <?php echo $story[0][0]["content"].nl2br("\n"); */
        ?>

<?php endwhile; // end of the loop. ?>
    </div>

</div>
