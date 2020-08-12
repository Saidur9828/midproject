<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		 .error {color: #FF0000;}
	</style>
</head>
<body>

	<?php
		 $nameErr = $emailErr = $genderErr = $passwordErr = "";
		 $name = $email = $gender = $experience = $password = "";

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					 $nameErr = "Name is required";
				}else {
					 $name = test_input($_POST["name"]);
				}

				if (empty($_POST["email"])) {
					 $emailErr = "Email is required";
				}else {
					 $email = test_input($_POST["email"]);


					 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$emailErr = "Invalid email format";
					 }
				}

				if (empty($_POST["password"])) {
					 $passwordErr = "Password is required";
				}else {
					 $password = test_input($_POST["password"]);
				}

				if (empty($_POST["experience"])) {
					 $experience = "";
				}else {
					 $experience = test_input($_POST["experience"]);
				}

				if (empty($_POST["gender"])) {
					 $genderErr = "Gender is required";
				}else {
					 $gender = test_input($_POST["gender"]);
				}
		 }

		 function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
		 }
	?>




	<form method = "post" action = "<?php
		 echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


		<center>
<h2>Registration</h2>

	<table border="2">
		<tr>
			 <td>Name:</td>
			 <td><input type = "text" name = "name">
					<span class = "error">* <?php echo $nameErr;?></span>
			 </td>
		</tr>
		<tr>
			 <td>Password:</td>
			 <td> <input type = "text" name = "password">
					<span class = "error">*<?php echo $passwordErr;?></span>
			 </td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="dob" value=""/></td>
		</tr>
    <tr>
      <td>Contact no:</td>
      <td><input type="text" name="contact" value=""></td>
    </tr>
		<tr>
			 <td>E-mail: </td>
			 <td><input type = "text" name = "email">
					<span class = "error">* <?php echo $emailErr;?></span>
			 </td>
		</tr>
		<tr>
			 <td>Gender:</td>
			 <td>
					<input type = "radio" name = "gender" value = "male">Male
					<input type = "radio" name = "gender" value = "female">Female
					<span class = "error">* <?php echo $genderErr;?></span>
			 </td>
		</tr>
		<tr>
			<td>Occupaton:</td>
			<td>
				<input type="checkbox" name="">Manager
				<input type="checkbox" name="">Rider
      	<input type="checkbox" name="">Cook
        <input type="checkbox" name="" value="">Staff
			</td>
		</tr>
		<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
					<option>B-</option>
					<option>O+</option>
					<option>O-</option>
				</select>
			</td>
		</tr>
		<tr>
			 <td>Job Experience:</td>
			 <td> <textarea name = "experience" rows = "5" cols = "40"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				 <input type = "submit" name = "submit" onclick="location.href='testt.php';" value = "Submit">
				<input type="reset" name="" value="Reset">
				<input type="button" onclick="location.href='home.php';" value="Back">
			</td>
		</tr>
	</table>
		</center>

	</form>


</body>
</html>

















<!-- 
<?php


	if(isset($_POST['submit'])){
		
		$username = $_POST['name'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$DOB = //$_POST['DOB'];
		$BG = $_POST['bloodGroup'];
		$JoiningDate = //$_POST['email'];
		$position = $_POST['position'];
		$address = $_POST['address'];


		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
		$sql = "insert into employee values('' , '{$username}'  ,  '{$password}'  ,'{$gender}',  '{$email}'  , '{$DOB}' , '{$BG}' , '{$JoiningDate}'  , '{$position}' , '', '{$address}')";
		
		if(mysqli_query($con, $sql)){
			echo "Registration done!";
		}
	else
	{
		echo "Something Error";

	}


}

	
?>
	
 -->