<?php
/// log in page //

include('server.php');
include('includes/header.php');


?> 

<main>

<h1>Sign-In</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 
 <fieldset>
   <label>Username</label>
   
   <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">  
   
   
    <label>Password</label>
    <input type="password" name="Password" >
    
    <?php
   include('includes/errors.php');
     ?> 
   
   <button type="submit" class="btn" name="login_user"> Login </button>
   
   <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' "> RESET </button>
   
   </fieldset>

 
</form>
  
  <p class="reg-again">New customer? <a href="register.php"> Register Here</a> </p>
  
  
</main>
<?php  include('includes/footer.php'); ?> 