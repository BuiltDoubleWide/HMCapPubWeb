<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $connect = mysqli_connect('192.168.18.5', 'root', '', 'CustomerInfo') or die("Connection Failed: " .mysqli_connect_error());
        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($__POST['phoneNum']) && isset($_POST['contactReason'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phoneNum = $_POST['phoneNum'];
            $contactReason = $_POST['contactReason'];

            $sql = "INSERT INTO 'Customers' ('fname', 'lname', 'email', 'phone', 'contactReason') VALUES ('$fname', '$lname', '$email', '$phoneNum', '$contactReason')";
            $query = mysqli_query($connect,$sql);
            if($query){
                echo 'Entry Success';
            }else{
                echo 'Error';
            }
        }
    }
?>