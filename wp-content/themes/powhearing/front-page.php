<?php /* Template Name: front-page */ 

echo "front-page.php <br>";

get_header();

get_template_part( 'template-parts/comp/modal-products', 'detail' );

get_template_part( 'template-parts/comp/modal_form', 'detail' );


get_footer(); 

?>