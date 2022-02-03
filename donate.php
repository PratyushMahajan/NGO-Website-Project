<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$country = $_POST['country'];
$address = $_POST['address'];
$city = $_POST['city'];

//Database Connecton

$conn2 = new mysqli('localhost','root','','ngo');

if($conn2->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{

    $stmt2 = $conn2->prepare("Insert into Donation(fullname, email, phone, country, address, city)
    values(?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("ssiisss",$fullname, $email, $phone, $amount, $country, $address, $city);
    $stmt2->execute();
    $stmt2->close();
    $conn2->close();

    echo '<script> window.location.href = "https://rzp.io/l/d1212fDSy"</script>';

}

?>