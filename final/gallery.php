<?php 
include('config.php');
include('includes/header.php');
?> 

<!--<h1 class=" <?php echo $center; ?> "> <?php  echo $mainHeadline;  ?>-->
<div id="wrapper">



<main> 


<!--  <img src="images/photo1.jpg" alt="photo1"> -->

 <table class="candidates"> 
  <?php foreach($people as $fullName => $image ): ?> 
 <tr> 
 <td> 
 <img src="images/pics/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo $fullName; ?>"> 
 </td>
 <td> 
 <?php echo str_replace('_', ' ',$fullName); ?>
 </td>
 <td> 
 <?php echo substr($image, 6);?>
 </td>
 </tr>
 <?php endforeach ; ?>
 </table>
 

 
 <?php

session_start();
// use !sset means if the user name has not been set yet//
if (!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = ' You must log in first';
    // direct the user to log in page //
    header('location: login.php');
}
// direct the user to log out if dont want to log in  // 
 if(isset($_GET['logout'])){
    session_destroy();
     unset($_SESSION['UserName']);
     header('location: login.php');
 }

?>

<!--//Notification message  of log on  /-->
<!--
  <?php

if(isset($_SESSION['success'])) :?>
<div class="success-login">  

 <h3> 
<?php
    echo  $_SESSION['success'];
    unset($_SESSIONj['success']);
     ?>
         
    </h3>
     
   </div> 
<?php endif ?>  
-->
  
 <!-- to allow the user to log out -->
 
 <div class="success-logout">
<?php
    if(isset($_SESSION['UserName'])) : ?> 
       <h3> Wellcom, 
<?php echo $_SESSION['UserName'] ; ?>
    </h3>
    <br>
   <p> <a href="index.php?logout='1'"> Log out </a> </p>
</div>
<?php endif ?>


</main>
   
  




  
<?php include ('includes/footer.php') ?>