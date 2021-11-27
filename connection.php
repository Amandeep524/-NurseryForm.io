<?php

$con = mysqli_connect('localhost', 'root', '','db_form');

// get the post records
$ChildName = $_POST['ChildName'];
$MotherName = $_POST['MotherName'];
$MotherOccupation = $_POST['MotherOccupation'];
$FatherName= $_POST['FatherName'];
$FatherOccupation = $_POST['FatherOccupation'];
$Address = $_POST['Address'];
$MobileNumber = $_POST['MobileNumber'];
$EmailAddress = $_POST['EmailAddress'];

// database insert SQL code
$sql = "INSERT INTO `tbl_form` (`ChildName`, `MotherName`, `MotherOccupation`, `FatherName`, `FatherOccupation`, 'Address' , 'MobileNumber' , 'EmailAddress' ) VALUES ('$ChildName', '$MotherName', '$MotherOccupation', '$FatherName' , '$FatherOccupation' , '$Address' , '$MobileNumber' , '$EmailAddress' )";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Form Submitted Successfully";
}

?>