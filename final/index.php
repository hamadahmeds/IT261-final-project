<?php
include('config.php');
include('includes/header.php');
?> 

<div id="wrapper">
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


<?php

//Notification message  of log on  /

if(isset($_SESSION['success'])) :?>
<div class="success-login">  

 <h3> 
<?php
    echo  $_SESSION['success'];
    unset($_SESSIONj['success']);
     ?>
         
    </h3>
     
   </div> <!-- end of scucess-->
<?php endif ?>  
  
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
        
        
        <?php include ('random-count.php') ?>
  
  <p> 
  
  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
  
   <p>  printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
   <p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
    <p> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p> 
  
    </main>


       
<?php  include('includes/footer.php'); ?> 
        
        
        