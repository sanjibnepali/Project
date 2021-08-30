
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Simple House - welcome</title>
  <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"
  rel="stylesheet"
  />
  <link href="css/all.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <?php
  session_start();
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "sms");
  ?>
</head>
  <!--

Simple House
-->
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
            <img
            src="img/simple-house-logo.png"
            alt="Logo"
            class="tm-site-logo"
            />
          </div>
          <nav class="col-md-6 col-12 tm-nav">
            <ul class="tm-nav-ul">
              <li class="tm-nav-li">
                <a href="index.php" class="tm-nav-link">Home</a>
              </li>

              <?php if (isset($_SESSION['username'])) { ?>
                <div class="dropdown">
                  <img src="images/profile.png" class="dropdown-img">
                  <div class="dropdown-content">
                    <li class="tm-nav-li">
                      <a href="logout.php" class="tm-nav-link" style="position: relative;
                      left: -35px;
                      top: -10px;
                      color: #2f956d;">Logout</a>
                    </li>
                    <br>
                    <li class="tm-nav-li">
                      <a href="login.php" class="tm-nav-link" style="position: relative;
                      left: -35px;
                      top: -10px;
                      color: #2f956d;">Profile</a>
                    </li>
                  </div>
                </div>
                <?php
              } else {
                ?>
                <li class="tm-nav-li">
                  <a href="login.php" class="tm-nav-link">Login</a>
                </li>
                <?php
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

    <a href="logout.php">Logout</a>
    <div class="profile"> 
      <div class="container">
        <h3> Your Profile </h3>
        <table style="width: 100%" border="1">
          <thead>
            <tr>
             <th> Username</th>
             <th> Email</th>
             <th> Operations</th>

           </tr>
         </thead>
         <?php
         include('config.php');
         $query = mysqli_query($conn, "select * from `users`");
         while ($row = mysqli_fetch_array($query)) {
         ?> <tbody>
          <tr>
            <td class="text-center"><?php echo $row['username'] ?></th>
              <td class="text-center"><?php echo $row['email'] ?></td>
              <td class="text-center" style="display: inline-flex;">
                <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                <?php include('button.php'); ?>
              </td>

            </tr>
          </tbody>
          <?php
        }
        ?>
      </table>
    </div>
    <!-- .container -->
  </div>
  <!-- .profile -->



</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
