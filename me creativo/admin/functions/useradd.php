<?php
$username = $_POST['username'];
$password = $_POST[ 'password'];
$email= $_POST['email'];
$address = $_POST['address'];
$priv= $_POST['priv'];
$gender= $_POST['gender'];
incLude 'connect.php';
$insertUser= "INSERT INTO users ( username, password, email , address ,
 priv, gender) VALUES ('$username','$password','$email',
'$address' , '$priv', '$gender')";
$query = $conn -> query ($insertUser);
if($query){
    header("location:../users.php") ;
}else {
echo $conn -> error;
}