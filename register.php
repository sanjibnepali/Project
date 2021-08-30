<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
			VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>registerpage</title>
	<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"
	rel="stylesheet"
	/>
	<link href="css/all.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
      <!-- Top box -->
      <!-- Logo & Site Name -->
      <div class="placeholder">
        <div
          class="parallax-window"
          data-parallax="scroll"
          data-image-src="image/login.jpg"
        >
          <div class="tm-header">
            <div class="row tm-header-inner">
              <div class="col-md-6 col-12">
                
              </div>
              <nav class="col-md-6 col-12 tm-nav">
                <ul class="tm-nav-ul">
                  <li class="tm-nav-li">
                    <a href="index.php" class="tm-nav-link">Home</a>
                  </li>
                  <li class="tm-nav-li">
                    <a href="login.php" class="tm-nav-link active">Login</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

	<div class="content">

		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>

</body>
</html>







