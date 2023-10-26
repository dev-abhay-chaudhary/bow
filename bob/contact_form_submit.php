<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

//require the connection file 
require_once('connection.php');

//check if submit btn is clicked
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // //save to db
    $insertQuery = "INSERT INTO `contact` (`name`, `phone_no`, `email`, `subject`,
        `message`) VALUES ('$name', '$phone_no', '$email', '$subject', '$message')";

    if (mysqli_query($con, $insertQuery)) {
        echo "Thank you for your query! We will get back to you soon for furthur assistance.";
        die();
    } else {
        die("Sorry something went wrong!");
    }
    mysqli_close($con);
}
else {
    echo "Sorry something went wrong!";
}
?>