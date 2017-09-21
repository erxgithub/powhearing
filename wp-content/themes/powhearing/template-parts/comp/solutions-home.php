<?php echo 'solutions-home.php'.nl2br("\n"); ?>

<?php
while ( have_posts() ) : the_post();
    $solutions = get_post_meta(get_the_ID(), "solutions_repeat_group");
    //var_dump($solutions);
    //echo nl2br("\n");
    //$image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'image-organization_id', 1 ), 'medium' );
    //echo $solutions[0][0]["image-organization_id"];
    //$image = wp_get_attachment_image( $solutions[0][0]["image-organization_id"], 'medium' );
    //var_dump($image);
    //echo nl2br("\n");


    if ($solutions[0] !== null) {

        foreach($solutions[0] as $key => $solution)
        {
            ?>
            <div class="solutions-section">
                <div>
                    <h1><?php echo $solution["title"]; ?></h1>
                </div>

                <div class="solutions-grid">

                    <!-- Organizations page link -->
                    <div class="solution-box1">
                        <a href="<?php echo get_permalink( get_page_by_title( $solution['link-organization'] ) ); ?>">
                            <div>
                                <!-- <img src="<?php //echo $solution["image-organization"]; ?>" /> -->
                                <?php echo wp_get_attachment_image( $solution['image-organization_id'], 'square' ); ?>
                        </div>
                            <div class="solution-title">
                                <p><?php echo $solution["title-organization"]; ?></p>
                            </div>
                        </a>
                    </div>

                    <!-- Live Events page link -->
                    <div class="solution-box2">
                        <a href="<?php echo get_permalink( get_page_by_title( $solution['link-le'] ) ); ?>">
                            <div>
                                <!-- <img src="<?php //echo $solution["image-le"]; ?>" /> -->
                                <?php echo wp_get_attachment_image( $solution["image-le_id"], 'square' ); ?>
                            </div>
                            <div class="solution-title">
                                <p><?php echo $solution["title-le"]; ?></p>
                            </div>
                        </a>
                    </div>

                    <!-- Individuals page link -->
                    <div class="solution-box2">
                        <a href="<?php echo get_permalink( get_page_by_title( $solution['link-individual'] ) ); ?>">
                            <div>
                                <!-- <img src="<?php //echo $solution["image-individual"]; ?>" /> -->
                                <?php echo wp_get_attachment_image( $solution["image-individual_id"], 'square' ); ?>
                            </div>
                            <div class="solution-title">
                                <p><?php echo $solution["title-individual"]; ?></p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <?php
        }
    }

endwhile; // end of the loop.
?>
