<?php require_once("page_header.php");?>
<!Doctype html>
<html lang="en">
<head>
<title>sign-in</title>
<link rel="stylesheet" type="text/css" href="style/reg.css">
<link rel="stylesheet" type="text/css" href="admin/style/formhack.css">
</head>

<?php  

    include_once('includes/functions.php');
    $user = new User(); 
         
    if(isset($_POST['login_btn'])){  
        $num = $_POST['num'];  
        $pwd = $_POST['pwd'];
        $remember_me = $_POST['remember_me'];

        $signin = $user->Login($num, $pwd);  
        if ($signin) {  
            // Registration Success  
           header("location:admin/index.php");  
        } else {  
            // Registration Failed  
            echo "Phone or  Password Not Match";  
        }  
	} 
	?>

<div>
<body>
<form id="signin" action="" method="POST" style="width:400px;border:3px solid black;border-radius:10px;padding:10px 15px;font-size:22px; font-family:Tahoma;">
<h2>SIGN IN NOW!</h2><br>
<div>
<input type="tel" name="num" placeholder="Enter Your Number" value="<?php echo (isset($_COOKIE['lister'])?$_COOKIE['lister']:'')?>"><br>
</div>

<div>
<input type="password" name="pwd" id="pass" placeholder="Enter Your password" value="">
</div>
<input type="checkbox" id="showPass">Show Password

<div>
 <input type="checkbox" name="remember_me" id="remember_me" value="1" <?php echo (isset($_COOKIE['lister'])?'checked':'')?>>
 <label for="Remember me">Remember me</label>
</div><br>

<button type="submit" name="login_btn" id="signin_btn" class="btn btn-success" value="signin">Sign in</button><br><br>

<a class="btn btn-link" href="#">forgot your Password</a>
</form>
</body>
<style>
div {
	display: block;
	box-sizing: border-box;
	width: 100%;
	padding: 8px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="jquery-3.5.1.js"></script>
<script src="showpass.js"></script>
</html>