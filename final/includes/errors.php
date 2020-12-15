<?php  // errofrs 

//if the user do not fill out the form correctly the error will show up 

if(count($errors) > 0 ) : ?> 
<div class="errors">
<?php  foreach($errors as $error) : ?> 
<p> <?php echo $error; ?> </p>
    
    <?php endforeach ?> 
    
</div> <!-- end error dive -->

<?php endif ?> 