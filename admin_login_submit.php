<?php 
	

	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = $_POST['email'];	
$password = $_POST['password'];

	
$sql = "SELECT id, email, firstName FROM admin where email='$email' AND pwd = '$password'";


$result = $conn->query($sql);


if ($result->num_rows > 0) { 

session_start();		
$_SESSION['email'] = $email;
while($row = $result->fetch_assoc()) 
   {
        $_SESSION['user_id']=$row["id"] ;
	$_SESSION['fName']=$row["firstName"];		

    }

header('location: Admin.php');
		
} 
else 
{
    header('location: Login.php?error_name=email or password does not exist');
	
}


?>