<?php
 /* Template Name: front-page */ 
echo "front-page.php <br>";
get_header();
?>


<!-- getting template_part that is setting for each page his content of description -->

<div>
    <?php get_template_part( 'template-parts/comp/what-we-do', 'detail' );?>
</div>   




