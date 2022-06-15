<?php
require_once 'connect.php';
echo '<pre>';
$name = $_POST[ 'name'];
$price =$_POST['price'];
$sale= $_POST['sale'];
$category =$_POST['category'];

$imgname = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];

if($_FILES['img']['error']== 0) {
    $extensions =['jpg','gif','png','jpeg'];
    $ext= pathinfo($imgname, PATHINFO_EXTENSION);
    if(in_array($ext,$extensions)){
        if ($_FILES['img']['size']<2000000){
            $newname =md5(uniqid()). '.' . $ext;
            move_uploaded_file($temp, "../images/".$newname);
        }else {
            echo "file size is too big";
        }
    }else {
        echo "wrong file extension";
    }
}else {
    echo "you must upload and image"; 
}
$inser= "INSERT INTO products (name, price, sale, cat_id ,img) VALUES ('$name','$price', '$sale', '$category','$newname' )";
$query =$conn -> query($inser);
if($query){
header("location:../products.php");
}else {
echo $conn-> error;
}