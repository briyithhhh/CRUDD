<?php
include('connection.php');
$conn = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE user SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}else{

}
?>