<?php

session_start();
$page_title = "Home";

$userID = $_SESSION['userID'];

//Redirect user to login screen if not signed in 
if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))){
  header("Location: login.php");
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Locality Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylelayout.css">
</head>
<body>

  <?php
    //Include Header
    include('header.php');
  ?>



<div class="row">
  <div class="column side">
	<!--<img class="smlogo" src="LogoSmall_3.0.png">-->
    <div>
      <ul class="sideNav">
        <a href="home.php"><li class="nav_active"><p>Home</p></li></a>
        <a href="spots_piv.php"><li class="nav_select"><p class="nav_txt">Where To Go</p></li></a>
        <a href="recommend.php"><li class="nav_select"><p class="nav_txt">Recommend a Spot</p></li></a>
        <a href="my_recommendations.php"><li class="nav_select"><p class="nav_txt">My Recommendations</p></li></a>
        <a href="signout.php"><li class="nav_select"><p class="nav_txt">Sign Out</p></li></a>
      </ul>
    </div>
  </div>
  
  <div class="column middle">
    <div class="pull_content">
      <form>
        <center>
        <h1 style="color: red;">Would you like to delete your account?</h1>
        <p style="color: red;">Warning: account deletion is permanent, this action cannot be reverted!</p>
        
        
        <button class="cancel_delete_btn" type="submit" formaction="/home.php">No, Take me back to Home</button></br>
        <button class="delete_btn" type="submit" formaction="/delete_functions.php">Yes, Permanently delete my account</button>
        </center>
        </form>
    </div>
    </div>

  <div class="column side">
	<!--<img class="smlogo" src="LogoSmall_3.0.png">-->
  <div>
      <ul class="sideNav">
        <a href="edit_account.php"><li class="nav_select"><p class="nav_txt">Edit Account</p></li></a>
        <a href="update_pass.php"><li class="nav_select"><p class="nav_txt">Update Password</p></li></a>
      </ul>
    </div>
  </div>
</div>
  
</body>
</html>