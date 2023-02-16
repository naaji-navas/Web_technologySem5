<?php
//database connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = "dbase";
$dbCon = mysqli_connect($hostname, $username, $password, $dbName);
if (!$dbCon) {
    die('Could not Connect MySql Server:' . mysqli_connect_error());
} else
    echo "Connection succeful";

$un = $_POST['username'];
$psw = $_POST['password'];
$em = $_POST['email'];
$pc = $_POST['password_confirm'];
if (
    empty($un) ||
    empty($psw) ||
    empty($em) ||
    empty($pc)
) {
    die('Please fill all required fields!');
} else {
    if ($_POST['password'] !== $_POST['password_confirm']) {
        die('Password and Confirm password should match!');
    } else {
        $sql = "SELECT * FROM userdetails WHERE $psw = userdetails.password";
        if (mysqli_query($dbCon, $sql) === TRUE) {
            echo "Form Validated Successfully";
        } else {
            echo mysqli_error($dbCon);
        }
    }
}
