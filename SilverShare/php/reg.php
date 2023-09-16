<?php
	$name = $_POST['name'];
	$password = $_POST['password'];
    $DOB = $_POST['DOB'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $selectedState = $_POST['state'];
    $language = $_POST['language'];
    $age = $_POST['age'];
    $hobby = $_POST['hobby'];
    $disease = $_POST['disease'];
    $vol_name = $_POST['vol_name'];


	// Database connection
	$conn = new mysqli('localhost','root','','elderly');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registeration(Name,Password,DOB,Email,Mobile,Gender,State,Language,Age,Hobby,Disease,Volunteer) values(?, ?, ?, ?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssisssssss", $name, $password, $DOB, $email, $mobile, $gender, $selectedState, $language, $age, $hobby, $disease, $vol_name);
		$execval = $stmt->execute();
		if ($execval) {
			header('Location: ../login.php
            ');
			exit(); // Terminate script execution to ensure the redirect happens
		} else {
			echo "Error: " . $stmt->error;
		}
		$stmt->close();
		$conn->close();
	}
?>