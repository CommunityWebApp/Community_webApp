	<?php
$conn=	mysqli_connect("localhost","root","jadhav123","usersdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	error_reporting(1);

if(isset($_POST['submit']))
{
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$addr=$_POST['addr'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$course=$_POST['course'];
	$state=$_POST['state'];
	$email=$_POST['email'];
	$pwd=md5($_POST['Password1']);
	$mobile=$_POST['mobileno'];
	$sql="insert into user values('$fname','$lname','$addr','$dob','$gender','$course','$state','$email','$pwd','$mobile')";
	if(mysqli_query($conn, $sql))
	{
		
		header('location:index.php');
			echo  "<h3 style='color:#0000ff' align='center'>Thank you..........$fname</h3><br/>";
		

	}
	else
	{
		echo  "<h3 style='color:red' align='center'>Insertion Failed</h3><br/>";
	} 
	
}
?>
