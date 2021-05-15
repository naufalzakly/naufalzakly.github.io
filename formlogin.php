<?php 
require 'fuction.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			header("Location: index.html");
			exit;
		}
	}

	$error = true;

}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Join NUANSA.Co</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN NUANSA.Co</title>
    <link rel="stylesheet" href="formlogin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

</head>

<body>
    <header id="header">
        <a href="#" class="logo"></i> NUANSA.CO</a>
        <ul>
            <li><a href="index.html"><i class="fa fa-fw fa-home"></i> HOME</a></li>
            <li><a href="desination.html"><i class="fa fa-fw fa-plane"></i> DESTINATION</a></li>
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i> CONTACT</a></li>
            <li><a href="formlogin.php"><i class="fas fa-sign-in-alt"></i> JOIN US</a></li>

        </ul>
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
        </div>
    </header>
</body>
<div>
  <img class="background" id="greenrectangle" src="image/greenrectangle.svg">
</div>
<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
      </div>
      <form action = "" method="post" class="form">
        <label for="user-name" style="padding-top:5px">&nbsp;Username </label>
        <input id="user-name" class="form-content" type="text" name="username" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:22px">&nbsp;Password </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="lupa_pass.html">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="login" value="LOGIN" />
        <a href="registrasi.php" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>

</html>