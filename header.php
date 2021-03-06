<!DOCTYPE html>
<html lang="en">
<head>
<title>Locality Recommend</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylelayout.css">
</head>
<header>
<?php
  if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))){

    //Displays defualt header when logged out
    echo '
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div style="opacity: 1;" class="topnav">
      <div class="topnav-left">
            <a href="index.php"><img class="lglogo" src="LogoFull_3.0.png" width="200" height="auto"></a>
            <a style="margin-left:10px" href="login.php" class="login">Login</a>
            <a style="margin-left:-20px" href="signup.php" class="signup">Sign Up</a>
        <div class="search-container">
          <form autocomplete="off">
						<input class="search_btn" type="submit" name="submit" value="Search">
            <input class="main_search"  type="search" placeholder="Search.." name="search">
          </form>
        </div>
      </div>
    </div>';
  }
  else{

    //Displays header when logged in
    echo '
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div style="opacity: 1;" class="topnav">
      <div class="topnav-left">
      <a href="home.php"><img class="lglogo" src="LogoFull_3.0.png" width="200" height="auto" ></a>
      <a style="margin-left:-20px" href="recommend.php" class="signup">Recommend a Spot</a>
        <div class="search-container">
          <form autocomplete="off">
						<input class="search_btn" type="submit" name="submit" value="Search">
            <input class="main_search"  type="search" placeholder="Search.." name="search">
          </form>
        </div>
      </div>
    </div>';
  }
?>
</header>