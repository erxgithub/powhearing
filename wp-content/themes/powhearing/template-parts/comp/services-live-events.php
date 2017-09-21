<!-- <?php echo 'services-le.php'.nl2br("\n"); ?> -->

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $services_le = get_post_meta(get_the_ID(), "services_le_repeat_group");

        if ($services_le[0] !== null) {
        foreach($services_le[0] as $key => $service_le)
        {
            ?>

            <div class="services_le">
                <div>
                    <h2><?php echo $service_le["title"]; ?></h2>
                </div>

                <div>
                    <img src="<?php echo $service_le["image-le"]; ?>" />
                    </div>

                <div>
                        <button class="button modalInfo" 
                        data-open="modalInfo" data-title="<?php echo $service_le["title-le"]?>"
                        data-img="<?php echo $service_le["image-le"]?>" data-content="<?php echo $service_le["title-content-le"]?>">

                            <?php echo $service_le["title-le"]; ?>
                        </button>
                </div>
            </div>

            <?php
        }
    }

    ?>

<?php endwhile; // end of the loop. ?>

