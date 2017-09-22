<!-- <?php echo 'device-solutions-comp.php'.nl2br("\n"); ?> -->


<?php while ( have_posts() ) : the_post(); ?>
        <?php
        $device_solutions = get_post_meta(get_the_ID(), "device_solutions_repeat_group");
        ?>

        <?php
    if ($device_solutions[0] !== null) {
        foreach($device_solutions[0] as $key => $device_solution)
        {
        ?>

            <div class="device-solutions-products">
                <div>
                    <h2><?php echo $device_solution["title-device-solutions"]; ?></h2>
                </div>

                    <div>
                        <img src="<?php echo $device_solution["image-device-solutions"]; ?>" />
                    </div>

                <div>
                    <button class="button modalInfo" 
                        data-open="modalInfo" data-title="<?php echo $device_solution["device-name"]?>"
                        data-img="<?php echo $device_solution["image-device-solutions"]?>" data-content="<?php echo $device_solution["cs-title-content"]?>">

                            <?php echo $device_solution["device-name"]; ?>
                    </button>
                </div>
            </div>    
        
        <?php
        }
    }
        ?>

<?php endwhile; // end of the loop. ?>
