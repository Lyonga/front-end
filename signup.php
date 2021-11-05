<?php require_once("page_header.php");?>
<!Doctype html>
<html lang="en">
<head>
<title>create-account</title>
<link rel="stylesheet" type="text/css" href="style/reg.css">
<link rel="stylesheet" type="text/css" href="admin/style/formhack.css">
</head>
<?php
include_once('includes/functions.php');
include_once('includes/validator.php');
$user = new User();

    if(isset($_POST['signup'])){  
      $num = $_POST['num']; 
      $UID = $_POST['UID'];   
      $pwd = $_POST['pwd'];  
      $pwd_repeat = $_POST['pwd_repeat']; 

      $UserValidator = new UserValidator($_POST);
      $errors = $UserValidator->ValidateForm();

      //validate password
      if($pwd == $pwd_repeat){  
          $signup = $user->isUserExist($num);  
          if(!$signup){  
              $signup = $user->UserRegister($num, $UID, $pwd);  
              if($signup){  
                   echo "Registration Successful";  
                   header("location:signin.php");
              }else{  
                  echo "Registration Not Successful>";  
              }  
          } else {  
              echo "Phone number Already Exist";  
          }  
      } else {  
          echo "Passwords do Not Match";  
        
      }  
  }  
?> 

<div style="padding-left:50px; padding-top:50px; padding-bottom:50px;" class="validation">
<body>        
<form id="signup_form" action="signup.php" method="POST" style="width:600px;border:3px solid black;border-radius:10px;padding:20px 25px;font-size:22px; font-family:Tahoma;">
<h2>CREATE ACCOUNT!</h2><br>

      <div id="error_msg"></div>
      <input type="tel" name="num" id="phone" placeholder="Enter Your Phone Number" value="" required=""><br>
      <div class="error"><?php echo $errors['num'] ?? '' ?></div>
      <span class="phone-msg"></span>

      <div id="error_msg">
      <input type="text" name="UID" id="user" placeholder="Enter your name" value="" required=""><br>
      <div class="error"><?php echo $errors['UID'] ?? '' ?></div>
      <span class="UID-msg"></span>
      </div>

      <div id="error_msg">
      <input type="password" name="pwd" id="pass" placeholder=" Enter Your password" value=""><br>
      <div class="error"><?php echo $errors['pwd'] ?? '' ?></div>
      <span class="pass-msg"></span>
      </div>
      <input type="checkbox" id="showPass">Show Password

      <div id="error_msg">
      <input type="password" name="pwd_repeat" id="pass_repeat" placeholder="Repeat Your password" value=""><br>
      <div class="error"><?php echo $errors['pwd_repeat'] ?? '' ?></div>
      <span class="pass_repeat-msg"></span>
      </div>

      <div>
      <button type="submit" class="allowed-submit" name="signup" value="submit" id="reg_btn">Register</button><br><br>
      </div>

        <div class="container signin">
            <p>Already have an account? <a href="signin.php">Sign in</a></p>
        </div>
</form>
</body>     
<style>
    p{
        color:red;
    }
    input {
	display: block;
	box-sizing: border-box;
	width: 100%;
	padding: 8px;
} 
.error{
        color:red;
    } 
.has-error, p{
    color:brown;
}  
</style>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="jquery-3.5.1.js"></script>
  <script src="login.js"></script>
  <script src="showpass.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</html>