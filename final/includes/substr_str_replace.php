<?php 
// substr and srt_replace 

$statment = 'The Presidental Election is around the corner' ;
echo $statment ; 

echo '<br>'; 
echo substr ($statment,0 );
echo '<br>'; 
echo substr ($statment,0,3);
echo '<br>'; 
echo substr ($statment,4 , 12);
echo '<br>'; 
echo substr ($statment,4 , 21);
echo '<br>'; 
echo substr ($statment,-6);
echo '<br>'; 
echo substr ($statment,-10 , 6);
echo '<br>'; 
$statment2 ='This eletion is the most  importat electoin in my lifetime';
 echo $statment2; 
echo '<br>'; 
echo str_replace('my', 'our!!',$statment2); 
echo '<br>'; 
echo str_replace('my', 'No,kidding!',$statment2); 
