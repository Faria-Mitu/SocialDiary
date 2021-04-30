<?php
require('../includes/database.php');
$id =$_REQUEST['user_id'];

$result = mysqli_query($con,"SELECT * FROM user WHERE user_id  = '$id' ");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$firstname=$test['firstname'];
$lastname=$test['lastname'];
$username=$test['username'];
$birthday=$test['birthday'];
$gender=$test['gender'];
$number=$test['number'];

if(isset($_POST['save']))
{	
$first_save=$_POST['firstname'];
$last_save=$_POST['lastname'];
$username_save=$_POST['username'];
$birthday_save=$_POST['birthday'];
$gender_save=$_POST['gender'];
$number_save=$_POST['number'];

	mysqli_query($con,"UPDATE user SET firstname ='$first_save', lastname ='$last_save', username ='$username_save', 
	birthday ='$birthday_save' , gender ='$gender_save', number ='$number_save' WHERE user_id = '$id'");
	echo "Saved!";
	
	header("Location: profile.php");			
}

?>