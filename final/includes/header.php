<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title><?php echo $title ;  ?> </title>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">

<!-- daily switch page style link -->
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet">
<!-- end of daily style link -->

<link href="css/styles.css" type="text/css" rel="stylesheet">


</head>
   
<body class="<?php echo $body ;  ?> ">


<header> 
<div class="inner-header"> 
     
      <a href="index.php"><img id="logo" src="images/logo.jpg" alt="logo"></a>
      
<nav>   

<ul>  
<?php echo makelinks($nav); ?>
</ul>


</nav>
</div> <!-- end of inner header -->
</header>
<div id="wrapper">