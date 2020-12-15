<?php 

// random and count function//

//$dice = rand(1,6);
//echo $dice; 
//
//
//    

//$dice1 rand(1,6);
//$dice2 rand(1,6);
//
//echo $dice1;
//echo '<br>';
//echo $dice2;



$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
if ($dice1 == $dice2){
    
//    echo'You\'ve got a double!';
    
} else {
    echo '<br>';
//    echo 'You don\'t' ;
    echo '<br>';
}
//$photos = arry('photo1','photo2','photo3','photo4','photo');
//
//$photos = [ 'photo1','photo2','photo3','photo4','photo'];

$photos[0]= 'photo1';
//$photos[1]= 'photo1';
//$photos[2]= 'photo2';
//$photos[3]= 'photo3';
//$photos[4]= 'photo4';
//$photos[5]= 'photo5';

$i = rand(0, count($photos)-1);
$selectedImages = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImages.' ">';
