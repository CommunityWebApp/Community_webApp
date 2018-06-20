<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<style>
.error {color: #FF0000;}
</style>
<script language="javascript" type="text/javascript">
 function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }

}
function validateForm() {
    var x = document.forms["f1"]["textname"].value;
    if (x == "")
        alert("Name must be filled out");
        return false;
}
</script>
</head>
<body>
<center>
<table align="center"><tr><td><h3 style="lightblue"><i>Student Registration Form</i></h3></td></tr></table>
 <form  action="insert.php"  method="post">
<table align="center"bgcolor="aqua" >
<tr>

<td><b><color="white">First Name:</b></td>
<td >
<input type="text" name="fname" required  placeholder="Enter Your First Name"  id="fname"/><br/> 
</td>
</tr> 
<tr>
<td><b>Last Name:</b></td>
<td >
<input type="text" name="lname" required  placeholder="Enter Your Last Name"  id="fname"/><br/> 
</td>
</tr> 
<tr>

<td><b>Address:</b></td>
<td >
<input type="text" name="addr" required  placeholder="Enter Your Address"  id="fname"/><br/> 
</td>
</tr> 
<tr>

<td><b>Date of Birth:</b></td>
<td >
<input type="date" name="dob" required    id="fname"placeholder="DD-MM-YYYY"/><br/> 
</td>
</tr> 
<tr>
	<td> <b>Gender:</b></td>
	<td><input type="radio" name="gender" value="Male"required >Male<br>
<input type="radio" name="gender" value="Female"required>Female</td>
	</tr> 
	
	
	<tr><td><b>Course:</b></td>
<td>
<select name="course" id="role"required>
<option value="-1">--SelectCourse--</option>
<option value="B.Tech">B.Tech</option>
<option value="MBA">MBA</option>
<option value="MCA">MCA</option>
<option value="Other">Other</option>

</select></td></tr>

<tr><td><b>State:</b></td>
<td>
<select name="state" id="branch"required>
<option value="-1">--SelectState--</option>
<option value="AP">AP</option>
<option value="TG">TG</option>
<option value="Other">Other</option>
</select></td></tr>

	<tr><td><b>Email:</b></td><td><input type="email" name="email" placeholder="enter valid email" required /></td></tr>
		<tr><td><b>Password:</b></td><td><input type="password" id="pass1" name="Password" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g"  placeholder="min 8 characters..." required="required" "/></td></tr>
<tr><td><label><b>Re-enter password:</b></td></label>
<td><input type="password" id="pass2"name="Password1"  pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g"   placeholder="type the password..." onkeyup="checkPass(); return false;"  required="required"><br></td>
<span id="confirmMessage" class="confirmMessage"></span><br>
	<tr><td><b>Mobile:</b></td><td><input type="text" name="mobileno" id="mobileno" required pattern="^[+0-9]{10,13}$" size="30"/></td></tr>
	
	<tr>	
		
    <td colspan="2" align="center">
       <input type="submit" value="submit" name="submit" 
 >
	   </td>
  </tr>

	</table>
	</form>
	
</body>
</html>
	

