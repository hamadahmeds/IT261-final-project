<?php
include('config.php');

if(isset($_GET['id'])){
    $id=(int)$_GET['id'];
} else{
    
 header('location: https://www.hamadacodes.com/it621web/final/cities.php');
    
}
$sql = 'SELECT * FROM Cities WHERE CityID = '.$id.'';
// connec to hte database //
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

 $result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0 ){ // show the record //
   
    while ($row = mysqli_fetch_assoc($result)){
        $CityName = stripslashes(  $row['CityName']);
        $CountryName = stripslashes(  $row['CountryName']);
        $VisitorsNumber = stripslashes(  $row['VisitorsNumber']);
        $Discription = stripslashes(  $row['Discription']);
        $feedback ='';
    }// end of while loop //
    
} else { // start else for for the if statment //
    $feedback = 'Sorry, No city  avalible now';
    
    
}


include('includes/header.php');
?> 
<div id="wrapper">
<main>

<h1 class=" <?php echo $center; ?>"> <?php  echo $mainHeadline; ?> Welcome to <?php echo $CityName; ?> City! </h1>

<?php
    if ($feedback === ''){
        echo '<ul';
        echo '<li><p>City Name:'.$CityName.'</p> </li>';
        echo '<li><p>Country Name:'.$CountryName.'</p> </li>';
        echo '<li><p>VisitorsNumber:'.$VisitorsNumber.' a year!! </p></li>';
        echo '<p> '.$Discription.'</p>';
        
        echo '</ul';
        
    } else { 
        echo $feedback;
        
    } // end else // 
?>

<aside> 
<?php
    
    if ($feedback ===''){
        echo'<img class="cityimag" src="uploades/city'.$id.'.jpg" alt=" '.$CityName.'" /> '; 
    } else {
     echo $feedback; 
    }
    
    // release he web server 
@mysqli_free_result($result);

// close the connection ///

@mysqli_close($iConn);
    
?> 
<a href="cities.php"> GO BACK TO CITIES LIST!</a>

</aside> 

</main>

<?php 
    include('includes/footer.php');
?> 
