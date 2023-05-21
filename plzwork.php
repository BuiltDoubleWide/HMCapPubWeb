<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$contactReason = $_POST['contactReason'];


$host = "192.168.18.5";
$user = "SA";
$pass = 'HMCap23!';
$db = 'CustomerInfo';

$connect = new mysqli($host, $user, $pass, $db);
if ($connect->connect_error){
    die('Connection Failed: '.$connect->connect_error);
} else{
    $stmt = $connect->prepare("Inert into Customers(fname, lname, email, phone, contactReason) values (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fname, $lname, $email, $phoneNum, $contactReason);
    $stmt->execute();
    echo "Maybe worked";
    $stmt->close();
    $connect->close();
}
?>