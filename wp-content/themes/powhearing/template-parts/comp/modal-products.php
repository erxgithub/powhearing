<!-- <p><button class="button" data-open="modalProducts">Click me for a modal</button></p> -->

<div class="reveal" id="modalProducts" data-reveal>

	<?php echo 'modal-products.php'.nl2br("\n"); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	    <?php
	        $product_modal = get_post_meta(get_the_ID(), "product_modal_repeat_group");
	        // var_dump($product_modal);
	        // echo nl2br("\n");
	        foreach($product_modal[0] as $key => $product_modal)
	        {
	            ?>

	            <div class="product_modal">
	                <div>
	                    <h3><?php echo $product_modal["title"]; ?></h3>
	                </div>
	                <div>
	                    <img src="<?php echo $product_modal["image"]; ?>" />
	                </div>
	                <div>
	                    <h3><?php echo $product_modal["description-title"]; ?></h3>
	                </div>
	                <div>
	                    <p><?php echo $product_modal["content"]; ?></p>
	                </div>
	            </div>

	            <?php
	        }
	    ?>

	<?php endwhile; // end of the loop. ?>

</div>

	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>