<?php echo 'individual-services.php'.nl2br("\n"); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $individual_services = get_post_meta(get_the_ID(), "consultation_services_repeat_group");

        if ($individual_services[0] !== null) {
        foreach($individual_services[0] as $key => $individual_service)
        {
            ?>

            <div class="individual-services">
                <div>
                    <h2><?php echo $individual_service["title"]; ?></h2>
                </div>

                    <div>
                        <img src="<?php echo $individual_service["image-cs"]; ?>" />
                    </div>

                <div>
                        <button class="button modalInfo" 
                        data-open="modalInfo" data-title="<?php echo $individual_service["title-cs"]?>"
                        data-img="<?php echo $individual_service["image-cs"]?>" data-content="<?php echo $individual_service["title-content"]?>">

                            <?php echo $individual_service["title-cs"]; ?>
                        </button>
                </div>
            </div>

            <?php
        }
    }

    ?>

<?php endwhile; // end of the loop. ?>

