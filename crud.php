<?php 
	include 'config.php';
	if(isset($_REQUEST['var']) && $_REQUEST['var']=== 'insert' ) {
		$fullname = $_REQUEST['f_name'];
		$emailid = $_REQUEST['e_mail'];
	    $stmt = $conn->prepare("INSERT INTO users (full_name, email_id)
	    VALUES (:fullname, :emailid)");
	    $stmt->bindParam(':fullname', $fullname);
	    $stmt->bindParam(':emailid', $emailid);
		$stmt->execute();
	} 	

	$stmt = $conn->prepare("SELECT * FROM users");
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$conn = null;
	$json = json_encode($results);
	echo $json;	
 ?>