<?php
	//Start session
	session_start();
	$page_title = 'Locality';

    //Mysql Connect
	include('mysqli_connect.php');
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
  <div class="topnav">
    <div class="topnav-left">
          <img class="lglogo" src="LogoFull_3.0.png" width="200" height="auto">
      <a href="login.php" class ="login">Login</a>
      <a href="signup.php" class ="signup">Sign Up</a>
      <div class="search-container">
        <form>
          <input class="searchbar" type="text" placeholder="Search.." name="search">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column side">
	<!--<img class="smlogo" src="LogoSmall_3.0.png">-->
  </div>
  
  <div class="column middle">
    <h2>Welcome to Locality!</h2>
    <h3>What we do:</h3>
    <dl class="deets">
      <dt>Tourists</dt>
      <dd>- No more getting stuck in tourist trap areas</dd>
      <dd>- Find local places from bars, restaurants, parks and attractions that are off the beaten path</dd>
      <dd>- Get a chance to Live Like a Local</dd><br>

      <dt>Local Residents</dt>
      <dd>- Rep your favorite places in town</dd>
      <dd>- Help shine like on your town's local businesses</dd>
      <dd>- Give visitor a chance to experience your city the way it was meant to</dd>
    </dl>
  </div>
  
  <div class="column side">
	<!--<img class="smlogo" src="LogoSmall_3.0.png">-->
  </div>
</div>
  
</body>
<?php include('footer.php');?>
</html>