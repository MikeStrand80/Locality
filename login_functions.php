<?php

function check_login($dbc, $username='', $password=''){

	//create an array to hold errors
	$errors = array();

	//check if username was filled out and create error
	if (empty (trim($username))){
		$errors[] = "You must enter your username.";
	}
	else{
		$u = mysqli_real_escape_string($dbc, trim($username));
	}

	//checking if password was filled in and create error
	if (empty (trim($password))){
		$errors[] = "You must enter your password.";
	}
	else{
		$p = mysqli_real_escape_string($dbc, trim($password));
	}

	//if everything is filled in correctly
	if (empty($errors)){

		//run the query
		$query = "SELECT username, userID, userCity, userFirstName, userLastName, userEmail, userZipCode FROM User WHERE username='$u' AND userPassword=SHA2('$p',256)";

		$result = @mysqli_query($dbc, $query);

		//if the result of the query is only one row 
		if (mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			
			return array(true, $row);
		}

		//otherwise there was an error
		else{
			
			$errors[] = "The username or password do not match existing users.";
		}
	}

	return array(false, $errors);
}
?>