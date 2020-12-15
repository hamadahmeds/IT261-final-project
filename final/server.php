<?php

session_start();
include('config.php');


// initialize all the variables //

$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$errors = array();     // usr push array functoin//
$success = 'You are now logged in!';

// HOW TO CONNECT TOT HE DATABASE??//

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// EXT REGISTER THE USER //

if(isset($_POST['reg_user'])) {   // then lets  receive all the infomation// 
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Password_1  = mysqli_real_escape_string($db, $_POST['Password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);
    
    // next arry push fucntion will be able to add extea errors //
    
    if(empty($FirstName)) {
        array_push($errors, 'First name is required');
    }
    
    if(empty($LastName)) {
        array_push($errors, 'Last name  is required');
    }
    
    if(empty($UserName)) {
        array_push($errors, 'User name  is required');
    }
     if(empty($Email)) {
        array_push($errors,'Email  is required');
    }
    
    
    if(empty($Password_1)){
        array_push($errors, 'Password  is required');
    }
    
    if($Password_1 != $Password_2){
        array_push($errors, 'Passwords do not match');
    }
    ///  Users  have to check to see if there is a user name or email out there that  they would like to use,but if the user name or the  email is already used the registeration will not go though ///
    
    $user_check_query ="SELECT * FROM Users WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1"; 
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result); 
    // the fitech will bring the resultes//
    
    if($user){
        if ($user['UserName'] == $UserName ){
            array_push($errors, 'User name already exists');
    }
    
        if ($user['Email'] == $Email ){
            array_push($errors, 'User email already exists');
    }
        
    }  // end if user //
    
    // if everything is ok , there is NO ERRORS //
   
if (count($errors) == 0){
    // call the fucntoin that encrypt the password in the database//
    $Password = md5($Password_1);
    
    // Insert my the infomation into the users' table //
    $query = "INSERT INTO Users (FirstName , LastName , UserName , Email, Password) VALUES ('$FirstName' ,'$LastName', '$UserName','$Email', '$Password') ";
    
    // then creat a funciton to query the database and the query // 
    mysqli_query($db, $query);
    // then sesstionS//. 
    
    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;
   
    header('location: login.php');
        
}   // end acount //
  
} //end isset //

// we will return to the server.php page to enter the log in informations !!!

if(isset($_POST['login_user'])){
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);
    
    if(empty($UserName)){
        array_push($errors, 'Username is required');
    }
    
    if(empty($Password)){
        array_push($errors, 'Password is required');
    }
    
    
    if(count($errors) == 0){
        $Password = md5($Password);

        $query = 'SELECT * FROM Users WHERE UserName = "'.$UserName.'" AND Password = "'.$Password.'" ';
     
        $results = mysqli_query($db, $query) or die(myerror(__FILE__,__LINE__,mysqli_error($db)));
        
       
    if(mysqli_num_rows($results) == 1 ){ 

        $_SESSION['UserName'] = $UserName;
        $_SESSION['success'] = $success;

        
        header('location: index.php'); // after log you willbe at  the home opage 
       
//        header('location: https://www.hamadacodes.com/it621web/cities/cities.php');
    } else {
        array_push($errors, 'wrong username/password combination');
    }
    
        
    } // end of count //
        
    
} // closing isset