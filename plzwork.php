<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$contactReason = $_POST['contactReason'];

$connect = new mysqli('192.168.18.5', 'SA', 'HMCap23!');
if ($connect->connect_error){
    die('Connection Failed: '.$connect->connect_error);
} else{
    //$stmt = $connect->prepare("Inert into Customers(fname, lname, email, phone, contactReason) values (?, ?, ?, ?, ?)");
    //$stmt->bind_param("sssss", $fname, $lname, $email, $phoneNum, $contactReason);
    $stmt->execute();
    echo "Maybe worked";
    $stmt->close();
    $connect->close();
}
?>