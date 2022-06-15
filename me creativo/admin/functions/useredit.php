<?php
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST[ 'password'];
$email= $_POST['email'];
$address = $_POST['address'];
$priv= $_POST['priv'];
$gender= $_POST['gender'];

if(!empty($password)){
    $pass= md5($password);
    $updatepass ="UPDATE users set  password ='$pass' WHERE id ='$id' ";
    $conn -> query($updatepass);
}
incLude 'connect.php';
$updateUser =" UPDATE users set username='$username'  , email ='$email',address='$address'  ,priv='$priv'  ,gender='$gender' WHERE id ='$id' ";
$query = $conn -> query($updateUser);

if($query) {
    header("location:../users.php");
} else {
    echo $conn -> error ;
}