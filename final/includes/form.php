
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset> 
    
<label>First Name </label>
    <input type="text" name="firstName" value="<?php
    if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ; ?>">
    <span><?php echo $firstNameErr; ?></span>
    
<label>Last Name </label>
    <input type="text" name="lastName" value="<?php
    if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']) ; ?>">
    <span><?php echo $lastNameErr; ?></span>
    
<label>Email </label>
    <input type="email" name="email" value="<?php
    if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ; ?>">
    <span><?php echo $emailErr; ?></span>
    
<label>Telephone </label>
    <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
    if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ; ?>">
    <span><?php echo $telErr; ?></span>
    

<label>Gender: </label>
    <ul>  
    <!-- logic = we are still asking if post currency was set but now we are asking one more question - is the post currency equal to the value-->
        <li><input type="radio" name="gender" 
        value="female" 
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>
        >Female </li>

        <li><input type="radio" name="gender" 
        value="male" 
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
        >Male </li>
   
     </ul>
    <span><?php echo $genderErr; ?></span>

 <label>Reservation :  </label>
    
 <ul>  

<li><input type="checkbox" name="service[]" value="flight"
    <?php if(isset($_POST['service'])&& $_POST['service']== 'flight') echo 'checked ="checked" '; ?>
    >Flight</li>


    <li><input type="checkbox" name="service[]" value="hotel"
    <?php if(isset($_POST['service'])&& $_POST['service']== 'hotel') echo 'checked ="checked" '; ?>
    >Hotel</li>

    <li><input type="checkbox" name="service[]" value="cruise"
    <?php if(isset($_POST['service'])&& $_POST['service']== 'cruise') echo 'checked ="checked" '; ?>
    >Cruise</li>

    <li><input type="checkbox" name="service[]" value="vehical"
    <?php if(isset($_POST['service'])&& $_POST['service']== 'vehical') echo 'checked ="checked" '; ?>
    >Vehical</li>
     
    <li><input type="checkbox" name="service[]" value="tour "
    <?php if(isset($_POST['service'])&& $_POST['service']== 'tour ') echo 'checked ="checked" '; ?>
    >Tour</li>

</ul>

 <span><?php echo $serviceErr; ?></span>
    

<label>Comments:</label>
    <textarea name="comments" ><?php if(isset($_POST['comments'])) echo
    htmlspecialchars($_POST['comments']);  ?></textarea>
    <span><?php echo $commentsErr; ?></span>

<input type="radio" name="privacy" value="<?php 
if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']);?>"> 
I agree to the privacy policy. 
<span><?php echo $privacyErr; ?></span>
    
    
     <input type="submit" value="Submit">
     <p><a href="">Reset Form </a></p>
</fieldset> 

</form>
