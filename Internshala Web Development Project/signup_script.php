<?php
    require("includes/common.php");
?>
<?php
$email =  mysqli_escape_string($con, $_POST['email']);
$first_name = mysqli_escape_string($con, $_POST['first_name']);
$last_name = mysqli_escape_string($con, $_POST['last_name']);
$phone=$_POST['phone'];
$users_query = "SELECT  id FROM users WHERE email = '$email'";
$users_result = mysqli_query($con, $users_query);
if(mysqli_num_rows($users_result)>0){
echo 'Email id already exists';
}
else{
$user_registration_query = "insert into users(email, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
}
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
header('location: products.php');