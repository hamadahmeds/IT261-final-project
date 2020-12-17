<?php
// cities.php//
include('config.php');

include('includes/header.php');

// we are connecting to the database !!//

?> 


<h1 class=" <?php echo $center; ?> "> <?php  echo $mainHeadline;  ?> </h1>

<main>
<h1>A list of Top Cities to Visit!</h1>


<?php
 $sql = 'SELECT * FROM Cities';

 $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

 $result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));


// do we have more than 0 rows ?// 
if (mysqli_num_rows($result) > 0 ){ // show the record //
   
while ($row = mysqli_fetch_assoc($result)){
    //thi arry will display the contents or  your row //
    echo'<ul>'; // we use a similar hrefs values that we used for our switch assignment // 
   
echo'<li class="bold">For more information about <a href="cities-view.php?id='.$row['CityID'].'">'.$row['CityName'].' </a> City!   In,'.$row['CountryName'].' </li>';
    
//    echo'<li> In,'.$row['CountryName'].'  </li>';
    echo'<li> '.$row['VisitorsNumber'].' tourists visit each year </li>';
    echo'</ul>'; //closing the while//

} // clossing the while 
    
} else { //  what if there is no candadate we need to ech somting ///
    echo'NO city  !';
} // close else 
// release he web server 
@mysqli_free_result($result);

// close the connection ///

@mysqli_close($iConn);

?>

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



</main>


<!--//Notification message  of log on  //-->
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

 <aside> 
 <h1> 12 Top Cities in the World to Visit </h1> 
 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </p>
  <p>as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
  <p>Ipsum is that it has a more-or-less normal distribution of letters,now use Lorem Ipsum as their default model text, and a search for  </p>
   
 </aside>
 
 <?php 

include('includes/footer.php'); ?>





