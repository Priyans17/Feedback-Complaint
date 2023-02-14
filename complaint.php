<?php 
include 'conn_complaint.php';
include 'complaint.html';


if (isset($_POST["submit"])) {
  
  $Name =  $_POST['name'];
  $Email =  $_POST['email'];
  $Phone = $_POST['phone'];
  $Enrollment  =  $_POST['enrollment'];
  $Date =  $_POST['date'];
  $Person = $_POST['person'];
  $Detail = $_POST['detail'];
  $Additional = $_POST['additional'];
  $Signup = $_POST['Signup'];

    $sql="INSERT INTO `complaint`(`Name`, `Email`, `Phone`, `Enrollment`, `Date`, `Person`, `Detail`, `Additional`, `signup`)
    VALUES ('[$Name]','[$Email]','[$Phone]','[$Enrollment]','[$Date]','[$Person]','[$Detail]','[$Additional]','[$Signup]')";
    $result= mysqli_query($conn, $sql);
    echo "<script>alert('Your Complaint has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>
