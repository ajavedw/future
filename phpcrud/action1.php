<?php
include 'config1.php';
session_start();

$id ="";
$name ="";
$email ="";
$phone ="";
$photo ="";


if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $photo = $_FILES['photo']['name'];
    $loc = 'upload1'.'/'.$photo;

    $query =  "INSERT INTO crud1(name,email,phone,photo)VALUES(?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt-> bind_param('ssss',$name,$email,$phone,$photo);
    $stmt->execute();
    move_uploaded_file($_FILES['photo']['tmp_name'],$loc);
    header('location:index1.php');
    $_SESSION['responseclass']="-success";
    $_SESSION['responsesuccess']="Succefully added";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql =  "SELECT photo FROM crud1 WHERE id=?";
    $stmt2 = $conn->prepare($sql);
    $stmt2->bind_param("i",$id);
    $stmt2->execute();
    $result2= $stmt2->get_result();
    $row=$result2->fetch_assoc();

    $imagepath = $row['photo'];
    unlink($imagepath);


    $query = "DELETE FROM crud1 WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('location:index1.php');
    $_SESSION['responseclass'] = "-danger";
    $_SESSION['responsesuccess'] = "Succefully deleted";
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $query = "SELECT * FROM crud1 WHERE id=?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $photo = $row['photo'];
}

?>