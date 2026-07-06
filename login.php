<?php
$user = $_POST['username'];
$pass = $_POST['password'];

// Yahan database se connection check hota hai
if($user == "admin" && $pass == "12345") {
    echo "Login Successful!";
} else {
    echo "Invalid Credentials!";
}
?>

