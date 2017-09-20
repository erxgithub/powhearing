<?php echo 'device-solutions-comp.php'.nl2br("\n"); ?>

<div class="device-solutions">
    <div>
        <h2><?php echo $device_solution["title-device-solutions"]; ?></h2>
    </div>

    <div class="device-grid">

<?php while ( have_posts() ) : the_post(); ?>
        <?php
        $device_solutions = get_post_meta(get_the_ID(), "device_solutions_repeat_group");
        ?>

        <?php
        foreach($device_solutions[0] as $key => $device_solution)
        {
        ?>

            <div class="device-box">
                <div>
                    <img src="<?php echo $device_solution["image-device-solutions"]; ?>" />
                </div>
                <div>
                    <h4><?php echo $device_solution["device-name"]; ?></h4>
                </div>
            </div>

        <?php
        }
        ?>

<?php endwhile; // end of the loop. ?>
    </div>

</div>
