<?php
$student = $_POST['student'];
$email = $_POST['email'];
$abhi = $_POST['abhi'];
$abhi1 = $_POST['abhi1'];
$abhi2 = $_POST['abhi2'];
$abhi3 = $_POST['abhi3'];
$abhi4 = $_POST['abhi4'];
$abhi5 = $_POST['abhi5'];
$abhi6 = $_POST['abhi6'];
$abhi7 = $_POST['abhi7'];
$abhi8 = $_POST['abhi8'];
$abhi9 = $_POST['abhi9'];
$abhi10 = $_POST['abhi10'];
$abhi11 = $_POST['abhi11'];
$abhi12 = $_POST['abhi12'];
$abhi13 = $_POST['abhi13'];
$abhi14 = $_POST['abhi14'];




$con = mysqli_connect('localhost','root', '','test');
$query ="INSERT INTO ranjan(student,email,abhi,abhi1,abhi2,abhi3,abhi4,abhi5,abhi6,abhi7,abhi8,abhi9,abhi10,abhi11,abhi12,abhi13,abhi14)".
        "VALUES('$student','$email','$abhi','$abhi1','$abhi2','$abhi3','$abhi4','$abhi5','$abhi6','$abhi7','$abhi8','$abhi9','$abhi10','$abhi11','$abhi12','$abhi13','$abhi14')";
     mysqli_query($con,$query)
	   or die("Error querying the datbase.");
	echo("Data Successfully Inserted.");
	
?>