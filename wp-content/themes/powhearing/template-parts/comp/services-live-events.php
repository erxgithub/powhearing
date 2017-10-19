<!-- <?php echo 'services-live-events.php'.nl2br("\n"); ?> -->

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $services_le = get_post_meta(get_the_ID(), "services_le_repeat_group");

        if ($services_le[0] !== null) {
        ?>
            <div class="services-section">
                <div>
                    <h2><?php echo $services_le[0][0]["title"]; ?></h2>
                </div>


                <div>
                    <img src="<?php echo $service_le["image-le"]; ?>" />
                </div>

                <div class="services-grid">
        <?php
        foreach($services_le[0] as $key => $service_le)
        {
            ?>
                    <div class="service-box">
                        <div class="service-image">
                            <img src="<?php echo $service_le["image-le"]; ?>" />
                        </div>

                        <div class="service-button">
                            <button class="button modalInfo"
                                data-open="modalInfo" data-title="<?php echo $service_le["title-le"]?>"
                                data-img="<?php echo $service_le["image-le"]?>"
                                data-content="<?php echo $service_le["title-content-le"]?>">

                                <?php echo $service_le["title-le"]; ?>
                            </button>
                        </div>
                    </div>
            <?php
        } ?>


                </div>
            </div>
    <?php
    }

    ?>

<?php endwhile; // end of the loop. ?>
