<?php  

session_start();

# check if the user is logged in
if (isset($_SESSION['name'])) {
	
	# database connection file
	include '../db.conn.php';


	$id = $_SESSION['user_id'];

	$sql = "UPDATE users
	        SET last_seen = NOW() 
	        WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	

}else {
	header("Location: ../../index.php");
	exit;
}