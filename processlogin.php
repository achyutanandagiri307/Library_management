<?php
$password = $_POST['Password'];

if ($password=="1234567890") {
    header("Location: dashboard.php");
    exit();
}
else {
    header("Refresh: 3; url=login.HTML");
    echo "Invalid password";
    exit();
}
?>