<?php
require 'includes/common.php';
?>
<?php
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: login.php?email_error=enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  header('location: login.php?password_error=enter correct password');
}
$email = mysqli_real_escape_string($con, $email);
$password = md5(mysqli_real_escape_string($con, $password));
$users_query = "SELECT  id,email FROM users_products WHERE (email = '$email')";
$users_result = mysqli_query($con, $users_query);
if(mysqli_num_rows($users_result)==0){
    echo 'User not registered';
}
else{
$row=mysqli_fetch_array($users_result);
}
$_SESSION[email]=$email;
$_SESSION[id]= mysqli_insert_id($con);
if (isset($_SESSION[email])) {
header('location: products.php');
}