<?php 
include('config.php');
include('includes/header.php');
?> 


<main>
<h1 class=" <?php echo $center; ?> "> <?php  echo $mainHeadline;  ?> </h1>
 


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
<!--//Notification message  of log on//-->

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
        

      
  
   
       <h1>Travel Agency History </h1>
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p> 
       <h2>Travel Agency Servece </h2>
      <p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised</p>
      <h3> Travel Agency Policy </h3>
      <p> in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  
   
   
   <div id="dataimg">
 <img src="images/citiesdata.jpg" alt="citiesdata">
 <img src="images/usersdata.jpg" alt="usersdata">
    </div>

    </main>

       
<?php  include('includes/footer.php'); ?> 
        
        
        