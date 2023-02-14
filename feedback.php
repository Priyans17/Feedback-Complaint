<?php 
include 'conn_feedback.php';
include 'feedback.html';


if (isset($_POST["submit"])) {

$Name =  $_POST['Name'];
$Email =  $_POST['Email'];
$Phone = $_POST['Phone'];
$Enrollment  =  $_POST['Enrollment'];
$Q1 =  $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$Q5 = $_POST['Q5'];
$Q6 = $_POST['Q6'];
$Q7 = $_POST['Q7'];
$Signup = $_POST['Signup'];

    $sql="INSERT INTO `feedback`(`Name`, `Email`, `Phone`, `Enrollment`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Signup`) 
    VALUES ('[$Name]','[$Email]','[$Phone]','[$Enrollment]','[$Q1]','[$Q2]','[$Q3]','[$Q4]','[$Q5]','[$Q6]','[$Q7]','[$Signup]')";
    $result= mysqli_query($conn, $sql);
    echo "<script>alert('Your Feedback has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>
