<?php

ob_start(); /* this prevents header errors befoer reading a whole page */
define('DEBUG','FALSE'); /* to see our errors*/
include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $people['Donald_Trump'] = 'trump_President from NY.';
    $people['Joe_Biden'] = 'biden_Vice Pesident from PA.';
    $people['Hilary_Clinton'] = 'clint_Secretary from NY.';
    $people['Bernie-sanders'] = 'sande_Senator  from VT.';
    $people['Elizabeth-Warren'] = 'warre_ Senator from MA.';

    $people['Kemala-Harris'] = 'harri_Senator from CA.';
    $people['Cory-Booker'] = 'booke_Senatorfrom NJ.';
    $people['Andrew-Yany'] = 'ayang_Senator from NY.';
    $people['Pete-Buttigieg']='butti_Senatorfrom IN.';
    $people['Amy-klobuchar']='klobu_Senatorfrom MN.';
    $people['Julian-Castro']='castr_Senator from TX.';


switch(THIS_PAGE){
        
    case 'login.php':
        $body = 'login';
        $title = 'Our Cities log in page !!!'; 
        break; 
        
    case 'register.php':
        $body = 'register';
        $title = 'Register for register  cities page !!!'; 
        $center = 'center';
        break; 
        
     case 'index.php':
        $body = 'home';
        $mainHeadline ='Represent the best top 12 Cities in the world to trvel!';
        $title = 'Home page'; 
        $center = 'center';
        break; 
    case 'about.php' :
        $body ='about inner';
        $title ='About';
        $mainHeadline ='More about Our Travel agency';
        $center = 'center';
        
        break ; 
        
//    case 'daily.php' :
//        $body ='daily';
//        $title ='Daily page';
//        $mainHeadline =' Daily Updates Our Service !';
//        $center = 'center';
//        break ; 
//        
    
    case 'cities.php' :
        $body ='cities inner';
        $title ='cities list';
//        $mainHeadline ='Top Cities in the World to Visit! ';
        $center = 'center';
       
        break ; 
        
case 'cities-view.php' :
        $body ='cities-view inner';
        $title ='cities view';
        $mainHeadline ='  ';
        $center = 'center';
       
        break ; 
        
    case 'contact.php' :
        $body ='contact inner';
        $title ='Contact';
        $mainHeadline ='Reservation Form';
        $center = 'center';
        break ; 
        
        
    case 'thx.php' :
        $body ='thx';
        $title ='thx page !';
        $mainHeadline ='Thanks for your Reservation with us !';
        $center = 'center';
        $body ='contact inner';
        break ;
        
        
        
        
    case 'switch.php' :
        $body ='switch inner';
        $title ='Daily';
        $mainHeadline ='Welcome to Daily Page !';
        $center = 'center';
       
        break ; 
        
    case 'gallery.php' :
        $body ='gallery inner';
        $title ='Gallery';
        $mainHeadline ='Welcome to Candidadates Gallery';
        $center = 'center';
       
        break ; 
    
        
    case 'contact.php' :
        $title =' check out our Contact page';
        $mainHeadline ='Welcome to Contact page';
        $center = 'center';
        $body ='contact inner';
        break ; 
   

}  //end swith 
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['switch.php']= 'Daily';
//$nav['customers.php']= 'Customers';
$nav['cities.php']= 'Cities';

//$nav['gallery.php']= 'Gallery';

$nav['contact.php']= 'Contact';

function makelinks($nav){
$myReturn = '';

foreach($nav as $key => $value){
 if(THIS_PAGE == $key){
  $myReturn .= '<li> <a href=" '.$key.' " class="active">'.$value.'</a> </li>'; 
 } else {

$myReturn .= '<li> <a href=" '.$key.' " >'.$value.'</a> </li>';

 } //end else 
    
} //end foreach 

// always remember to return myReturn //
    
 return $myReturn;
}   //end function


//this is the php my form //
$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$service = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$genderErr = '';
$serviceErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['firstName'])) {
    $firstNameErr = 'Please fill out your first name';
    } else {
    $firstName = $_POST['firstName'];
    }
    
if(empty($_POST['lastName'])) {
    $lastNameErr = 'Please fill out your last name';
    } else {
    $lastName = $_POST['lastName'];
    }
    
if(empty($_POST['email'])) {
    $emailErr = 'Please fill out your email';
    } else {
    $email = $_POST['email'];
    }

if(empty($_POST['gender'])) {
    $genderErr = 'Please check one!';
    } else {
    $gender = $_POST['gender']; 
    }
    
    if($gender == 'male') {
        $male = 'checked';
    }    elseif($gender == 'female') {
            $female = 'checked';
    }
    
    
if(empty($_POST['service'])) {
    $serviceErr = 'What, no service?';
    } else {
    $service = $_POST['service']; 
    }

if(empty($_POST['comments'])) {
    $commentsErr = 'Please include your comments!';
    } else {
    $comments = $_POST['comments']; 
    }

if(empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Rules!';
    } else {
    $privacy = $_POST['privacy']; 
    }
    
// in end user checkes the checkboxes all of them , we wants to know 
// implode arry of wines so we need to creat a function for that !
function myService(){    //// ?????
    
    $myReturn =''; 
if(!empty($_POST['service'])){
 $myReturn = implode(',', $_POST['service']);

} return $myReturn;   //end if  
    
} //end function 
    
if(empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Your phone number please!';
    } elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telErr = 'Invalid format!';
    } else{
    $tel = $_POST['tel'];
}
}

if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['gender'],
        $_POST['service'],
         $_POST['comments'],
         $_POST['tel'],
         $_POST['privacy'])) { 
    $to = 'ahemdhamads@gmail.com';
    $subject = 'Test Email' .date('m/d/y');
    $body = ''.$firstName.' has filled out your form '.PHP_EOL.'';
    $body .= 'Email: '.$email.' '.PHP_EOL.'';
    $body .= 'Your phone number : '.$tel.' '.PHP_EOL.'';

    $body .='Your Reservations are : ' .myService().' '.PHP_EOL.'';

    $body .= 'Gender:'.$gender.' '.PHP_EOL.'';
    $body .= 'Comments: '.$comments.'';

    $headers = array(
    'From' => 'no-reply@lca.red',
    'Reply-to' => ''.$email.'');

    mail($to, $subject, $body, $headers);
    header('Location: thx.php');
    
} // end isset
    
    

} // close if $_SERVER request method


?>
<?php



function myerror ($myfile,$myline, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b> '.$myfile.'</b> on line: <b>' .$myline.'</b>';
     
        echo'Error message: <b>'.$errorMsg.'</b>';
        die();
        
    } else {
        echo 'Houston , we have a problem!';
        
    die();
        
    }
}

?>