<!-- Description component that will present description for each page -->


<?php
echo "description.php";

if(is_page('organizations', 'page')){ ?>
<div class="organi-box">
    <h1 class="organi-title"></h1>
    <p class="organi-content">
    
    </p>
</div>
<?php } 
elseif (is_page('live-events' , 'page') ){ ?>

<div class="live-box">
    <h1 class="live-title"></h1>
    <p class="live-content">
   
    </p>
</div>

    
<?php }
else {?>
<div class="indiv-box">
    <h1 class="indiv-title"></h1>
    <p class="indiv-content">
    
    </p>
</div>
    
<?php } ?>