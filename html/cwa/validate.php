
<?php
$conn=	mysqli_connect("localhost","root","jadhav123","usersdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{
	
	$username=$_POST['Username'];
	$password=md5($_POST['Password']);
	
	$sql="select * from user where emailId='$username' and enterPassword='$password'";
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0)
	{
		
	header("location:welcome.php");
	}
	else
	{
		echo  "Invalid user name and password";
		//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	} 
	
}


?>
