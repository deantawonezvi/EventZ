<?php

if(isset($_POST['tag']])){
	
	$tag = $_POST['tag'];
	
	switch($tag){
		case "signup":
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			
			$signup = array('phone' 	=> $phone,
							'password'	=> $password,
							'email'		=> $email);
			echo json_encode($signup); 
		break;
		
		case "login":
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			
			$login = array('phone' 	=> $phone,
							'password'	=> $password);
			echo json_encode($login);
		break;
		
		default:
			echo json_encode("Access Denied: No Criteria Specified");
		break;
	}
}else{
	echo json_encode("Access Denied:  Direct Scripts Access Prohibited");
}
?>