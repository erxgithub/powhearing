<?php 

echo "front-page"; ?>

<?php while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/contact-modal', 'detail' );

endwhile; // End of the loop. 

if(get_field('fName'))
{
	echo '<p>' . get_field('fName') . '</p>';
}

// PERCENTAGE

if(get_field('percentage_1'))
{
	echo '<p>' . get_field('percentage_1') . '</p>';
}

if(get_field('content_1'))
{
	echo '<p>' . get_field('content_1') . '</p>';
}

if(get_field('percentage_2'))
{
	echo '<p>' . get_field('percentage_2') . '</p>';
}

if(get_field('content_2'))
{
	echo '<p>' . get_field('content_2') . '</p>';
}

?>