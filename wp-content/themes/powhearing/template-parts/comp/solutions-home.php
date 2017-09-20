<?php echo 'solutions-home.php'.nl2br("\n"); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $solutions = get_post_meta(get_the_ID(), "solutions_repeat_group");
        //var_dump($solutions);
        //echo nl2br("\n");

        if ($solutions[0] !== null) {
        foreach($solutions[0] as $key => $solution)
        {
            ?>

            <div class="solutions">
                <div>
                    <h1><?php echo $solution["title"]; ?></h1>
                </div>

                <!-- Organizations page link -->
                <a href="#">
                    <div>
                        <img src="<?php echo $solution["image-organization"]; ?>" />
                    </div>
                    <div>
                        <p><?php echo $solution["title-organization"]; ?></p>
                    </div>
                </a>

                <!-- Live Events page link -->
                <a href="#">
                    <div>
                        <img src="<?php echo $solution["image-le"]; ?>" />
                    </div>
                    <div>
                        <p><?php echo $solution["title-le"]; ?></p>
                    </div>
                </a>

                <!-- Individuals page link -->
                <a href="#">
                    <div>
                        <img src="<?php echo $solution["image-individual"]; ?>" />
                    </div>
                    <div>
                        <p><?php echo $solution["title-individual"]; ?></p>
                    </div>
                </a>

            </div>

            <?php
        }
    }

    ?>

<?php endwhile; // end of the loop. ?>
