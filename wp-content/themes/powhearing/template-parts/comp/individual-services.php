<?php echo 'individual-services.php'.nl2br("\n"); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $individual_services = get_post_meta(get_the_ID(), "consultaiton_services_repeat_group");

        foreach($individual_services[0] as $key => $individual_service)
        {
            ?>

            <div class="individual-services">
                <div>
                    <h2><?php echo $individual_service["title"]; ?></h2>
                </div>

                <div>
                    <h4><?php echo $individual_service["title-cs"]; ?></h4>
                </div>

                <a href="#">
                    <div>
                        <img src="<?php echo $individual_service["image-cs"]; ?>" />
                    </div>
                </a>
            </div>

            <?php
        }

    ?>

<?php endwhile; // end of the loop. ?>