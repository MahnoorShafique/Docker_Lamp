
<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['phonenumber'];

	// Database connection
	$conn = new mysqli('db','lamp_docker','password','lamp_docker');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else { 
	
		$stmt = $conn->prepare("insert into user(firstname, lastname, email,phonenumber, password ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $firstName, $lastName, $email, $number, $password);
		$execval = $stmt->execute();
		
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
