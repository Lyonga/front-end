<?Php
if(!(isset($_SESSION['UID']) and strlen($_SESSION['UID']) > 2)){
echo "<b>Please <a href=signin.php>login</a> to use this page!! </b>";
exit;
}else{
echo "Welcome $_SESSION[UID] | <a href='logout.php'>Logout</a>|<a href='change.php'>Change Password</a>";
}
?>