<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$occupation = $_POST['occupation'];

//Database Connecton

$conn = new mysqli('localhost','root','','ngo');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("Insert into Volunteer(fullname, email, phone, address, occupation)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss",$fullname, $email, $phone, $address, $occupation);
    $stmt->execute();
    echo '<script> window.location.href = "reply.html"</script>';
    $stmt->close();
    $conn->close();
}

?>