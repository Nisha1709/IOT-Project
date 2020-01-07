<?php
//Write a code in HTML and Javascript to design a simple registration form.Validate it for I agree terms and conditions checkbox.
if(isset($_POST["$btnsubmit"]))
{
	$id=$_POST["txtid"];
	$fname=$_POST["txtfname"];
	$mname=$_POST["txtmname"];
	$lname=$_POST["txtlname"];
	$date=$_POST["bdate"];
	$gender=$_POST["radiobtn"];
	$contact=$_POST["txtcontact"];
	$address=$_POST["txtadd"];
	$city=$_POST["txtcity"];
	if(isset($_POST["chkbox"]))
	{
		$hobby=$_POST["chkbox"];
		$hobbies=implode(",",$hobby);
	}
	if(isset($_POST["chkverify"]))
	{
		$hobby=$_POST["chkverify"];
	}
	
}


?>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<form name="f1"method="post">
<table align="center">
		<tr>
			<th align="center"colspan="2">Registration Form</th>
		</tr>
		
		<tr>
			<th align="right">ID:</th>
			<td><input type="text"size="26"name="txtid"value="<?php
				if(isset($id))
				{
					echo $id;
				}
			?>"></input>
		</tr>
		
		<tr>
			<th align="right">First Name:</th>
			<td><input type="text"size="26"name="txtfname"value="<?php
				if(isset($fname))
				{
					echo $fname;
				}
			?>"></input>
		</tr>
		
		<tr>
			<th align="right">Middle Name:</th>
			<td><input type="text"size="26"name="txtmname"value="<?php
				if(isset($mname))
				{
					echo $mname;
				}
			?>"></input>
		</tr>
		
		<tr>
			<th align="right">Last Name:</th>
			<td><input type="text"size="26"name="txtlname"value="<?php
				if(isset($lname))
				{
					echo $lname;
				}
			?>"></input>
		</tr>
		
		<tr>
			<th align="right">Birth Date:</th>
			<td><input type="text"size="26"name="bdate"value="<?php
				if(isset($date))
				{
					echo $date;
				}
			?>"></input>
		</tr>
		
		<tr>
			<th align="right">Gender:</th>
			<td><input type="radio"name="radiobtn"value="Male">Male</input>
			<input type="radio"name="radiobtn"value="Female">Female</input></td>
		</tr>
		
		<tr>
			<th align="right">Contact No:</th>
			<td><input type="text"maxlength="10"size="26"name="txtcontact"value="<?php
				if(isset($contact))
				{
					echo $contact;
				}
			?>"></input>
		</tr>
		
			<tr>
			<th align="right">Address:</th>
			<td><textarea name="txtadd"value="<?php
				if(isset($address))
				{
					echo $address;
				}
			?>"></textarea></td>
		</tr>
		
			<tr>
			<th align="right">City:</th>
			<td>
				<select name="txtcity">
					<option>Bhuj</option>
					<option>Ahmedabad</option>
					<option>Mumbai</option>
					<option>Delhi</option>
					<option>Jaipur</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<th align="right" rowspan="2">Hobby:</th>
			<td><input type="checkbox"name="chkbox[]"value="Cricket">Cricket</input>
				<input type="checkbox"name="chkbox[]"value="Reading">Reading</input>
			</td>
		</tr>	
		
			<tr>
			
			<td><input type="checkbox"name="chkbox[]"value="Dance">Dance</input>
				<input type="checkbox"name="chkbox[]"value="Singing">Singing</input>
			</td>
		</tr>	
		
		
		<tr>
		<td></td>
		<td><input type="checkbox"name="chkverify">Verify all the details</input></td>
		</tr>
		
		<tr>
		<td></td>
		<td>
			<input type="submit"value="Submit"name="btnsubmit"></input>
			<input type="button"value="Close"name="btnclose"></input>
		</td>
		</tr>
</table>
</form>
</body>
</html>

<?php
	if(isset($_POST["btnsubmit"]))
	{
		echo "<table border=1>
		
				<tr>
					<td>ID:</td>
					<td>".$id."</td>
				</tr>
				
				<tr>
					<td>Name:</td>
					<td>".$fname." ".$mname." ".$lname."</td>
				</tr>
				
				<tr>
					<td>Birthdate:</td>
					<td>".$date."</td>
				</tr>
				
				<tr>
					<td>Gender:</td>
					<td>".$gender."</td>
				</tr>
				
				<tr>
					<td>Contact No:</td>
					<td>".$contact."</td>
				</tr>
				
				<tr>
					<td>Address:</td>
					<td>".$address."</td>
				</tr>
				
				<tr>
					<td>City:</td>
					<td>".$city."</td>
				</tr>
				
				<tr>
					<td>Hobbies:</td>
					<td>".$hobbies."</td>
				</tr>
			</table>";
	}

?>