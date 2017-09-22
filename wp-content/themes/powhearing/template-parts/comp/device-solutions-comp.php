<!-- <?php echo 'device-solutions-comp.php'.nl2br("\n"); ?> -->

<?php while ( have_posts() ) : the_post(); ?>
    <?php
        $device_solutions = get_post_meta(get_the_ID(), "device_solutions_repeat_group");

        if ($device_solutions[0] !== null) {
        ?>
            <div class="services-section">
                <div>
                    <h2><?php echo $device_solutions[0][0]["title-device-solutions"]; ?></h2>
                </div>

                <div class="services-grid">
        <?php
        foreach($device_solutions[0] as $key => $device_solution)
        {
            ?>
                    <div class="service-box">
                        <div class="service-image">
                            <img src="<?php echo $device_solution["image-device-solutions"]; ?>" />
                        </div>

                        <div class="service-button">
                            <button class="button modalInfo"
                                data-open="modalInfo" data-title="<?php echo $device_solution["device-name"]?>"
                                data-img="<?php echo $device_solution["image-device-solutions"]?>"
                                data-content="<?php echo $device_solution["cs-title-content"]?>">

                                <?php echo $device_solution["device-name"]; ?>
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
