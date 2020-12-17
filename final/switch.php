<?php 
include('config.php');
include('includes/header.php');
?> 


 
<h1 class=" <?php echo $center; ?> "> <?php  echo $mainHeadline;  ?> </h1>
  




<?php

if(isset($_GET['today'])) { // This like says if there is Today in the URL get the value
    $today = $_GET['today'];
} else {
    // is the case there was no today in the ULR
    // Meaning they arrived on the site for the first time
    $today = date('l');
}

//echo date('l');

switch($today){
    case 'Thursday' :
        $service = 'Enjoy our epecial day Hotels  service !';
        $pic = 'hotel.jpg';
        $alt = 'hotel';
        $content =  "<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
        <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>";
        
        $css = $today;
        $background = 'tan';
    break;
        
    case 'Friday' :
        $service = 'Enjoy our epecial day Arlines  service !';
        $pic = 'airline.jpg';
        $alt = 'airline';
        $content = "<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>  
        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> ";
        $css = $today;
        $background = 'red';
    break;
case 'Saturday' :
    $service = 'Our Cars Rental Service! Enjoy our epecial day  service !';
    $pic = 'car.jpg';
    $alt = 'cars';
    $content = " <p> it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>";
      $css = $today; 
      $background = 'skyblue';
  
    break;
        
    case 'Sunday' :
        $service = 'food! Enjoy our food  epecial day  service !';
        $pic = 'food.jpg';
        $alt = 'food';
        $content = "<p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>";
        $css = $today;
        $background = 'orange'; 
    break;
        
    case 'Monday' :
        $service = 'Enjoy our epecial day Drinks service !!';
        $pic = 'drink.jpg';
        $alt = 'drink';
        $content = " <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English </p>";
        $css = $today;
        $background = 'orange';
       
    break;
        
    case 'Tuesday' :
        $service = 'coffee day! Enjoy our epecial service day !';
        $pic = 'joe.jpg';
        $alt = 'coffee';
        $content = "<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p> 
        <p>randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>  <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>";
        $css = $today;
        $background = 'blue';
         
    break;
        
    case 'Wednesday' :
        $service = 'Cruise day! Enjoy our epecial day service !';
        $pic = 'cruise.jpg';
        $alt = 'Pumpkin Latte';
        $content = " <p> as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of</p> 
        <p>model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition </p> ";
        $css = $today;
        $background = 'orange';
    break;
}

?>

<!--
<head>

<style> 
    body{
        background: <?php echo $background;?>;  
    }
    
</style>
<meta charset="UTF-8">

<title>Switch Page</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet">
</head>
-->




<main class="<?php echo $background; ?> ">  
<h1><?php echo $service ?></h1>

<p><?php echo $content;  ?> </p>
<aside> 
<h3> <span>  Click below to find out what Service</span> <span> We Provide for our Customers! </span> </h3>

<ul>
   <li><a href="switch.php?today=Sunday">Sunday,Epecial-Discount </a></li>
    <li><a href="switch.php?today=Monday">Monday,Epecial-Discount </a></li>
    
    <li><a href="switch.php?today=Tuesday">Tuesday,Epecial-Discount </a>
    </li>
    <li><a href="switch.php?today=Wednesday">Wednesday,Epecial-Discount </a></li>
    <li><a href="switch.php?today=Thursday">Thursday,Epecial-Discount </a></li>
    <li><a href="switch.php?today=Friday">Friday,Epecial-Discount </a></li>
    <li><a href="switch.php?today=Saturday">Saturday,Epecial-Discount </a></li>
    </ul>
    </aside>
    
    <div class="imges">  
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    </div>
     </main>

    
<!-- start login statment -->
   
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
        
<!-- end login statment -->

    
    
    
    
<?php  include('includes/footer.php'); ?> 
    
    
    






