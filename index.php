<?php
	//Start session
	session_start();
	
	//Include Header
	$page_title = 'Locality';
	include('header.php');
	
	//Mysql Connect
	include('mysqli_connect.php');

	// Welcome the user (by name if they are logged in): !!This code is old and can be changed
	echo '<h1><center>Welcome';
	if (isset($_SESSION['fname'])) {
		echo ", {$_SESSION['fname']}";
	} else {
		echo ", You are not currently logged in";
	}
	echo '!</center></h1>';
	
	//Include Footer
	include('footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Locality Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylelayout.css">
</head>
<body>

<div class="row">
  <div class="column side">
	<img src="LogoSmall_3.0.png" width="25%">
  </div>
  
  <div class="column middle">
    <h2>Main Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  <div class="column side">
	<img src="LogoSmall_3.0.png" width="25%">
  </div>
</div>
  
</body>
</html>