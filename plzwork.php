<?php


// $conn = mysqli_connect('192.168.18.5', 'root', '', 'CustomerInfo');
// if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($__POST['phoneNum']) && isset($_POST['contactReason'])){
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $email = $_POST['email'];
//     $phoneNum = $_POST['phoneNum'];
//     $contactReason = $_POST['contactReason'];

//     $sql = "INSERT INTO `Customers` (`fname`, `lname`, `email`, `phone`, `contactReason`) VALUES ('$fname', '$lname', '$email', '$phoneNum', '$contactReason')";
//     $query = mysqli_query($conn,$sql);
//     if($query){
//         echo 'Entry Success';
//     }else{
//         echo 'Error';
//     }
// }

$host = '192.168.18.5';
$usr = 'root';
$pass = '';
$db = 'CustomerInfo';

$conn = mysqli_connect($host, $usr, $pass, $db);

if (mysqli_connect_errno()){
    die("Connection Error: " . mysqli_connect_errno());
}
echo "Connection worked";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$contactReason = $_POST['contactReason'];

$sql = "INSERT INTO `Customers` (`fname`, `lname`, `email`, `phone`, `contactReason`) VALUES ('$fname', '$lname', '$email', '$phoneNum', '$contactReason')";
$query = mysqli_query($conn,$sql);
if($query){
    echo 'Entry Success';
    }else{
        echo 'Error';
    }
?>