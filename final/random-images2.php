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



$dice1 = rand(1, 8);
$dice2 = rand(1, 8);
if ($dice1 == $dice2){
    
//    echo'You\'ve got a double!';
    
} else {
    echo '<br>';
//    echo 'US Government Officials 2020' ;
    echo '<br>';
}
//$photos = arry('photo1','photo2','photo3','photo4','photo');
//
//$photos = [ 'photo1','photo2','photo3','photo4','photo'];

$candidates[0]= 'biden';
$candidates[1]= 'trump';
$candidates[2]= 'booke';
$candidates[3]= 'ayang';
$candidates[4]= 'clint';
$candidates[5]= 'klobu';
$candidates[6]= 'sande';
$candidates[7]= 'harri';
$candidates[8]= 'warre';

$i = rand(0, count($candidates)-1);
$selectedImages = 'images/pics/'.$candidates[$i].'.jpg';
echo '<img src="'.$selectedImages.' ">';
