<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Basics */
       
        .logincontent
        {
            position: fixed;
            width: 350px;
            height: 300px;
            top: 50%;
            left: 50%;
            margin-top: -150px;
            margin-left: -175px;
            background: #07A8C3;
            padding-top: 10px;
            border-left-style:double;
            border-right-style: double;
            border-top-style: double;
            border-bottom-style: double;
            
        }
        .loginheading
        {
            border-bottom: solid 1px #ECF2F5;
            padding-left: 18px;
            padding-bottom: 10px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }
        label
        {
            color: #000000;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 15px;
        }
        input[type=text], input[type=password]
        {
            font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 300px;
            height: 35px;
            border: 1px solid rgb(0, 0, 0);
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;
            font-size: 14px;
        }
        input[type=checkbox]
        {
            margin-left: 18px;
            margin-top: 30px;
        }
        .loginremember
        {
            background: #ECF2F5;
            height: 70px;
            margin-top: 20px;
        }
        .check
        {
            font-family: sans-serif;
            position: relative;
            top: -2px;
            margin-left: 2px;
            padding: 0px;
            font-size: 12px;
            color: #321;
        }
        .loginbtn
        {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            padding: 6px 20px;
            font-size: 14px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            background-color: #07A8C3;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#07A8C3), to(#6EE4E8));
            background-image: -moz-linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            background-image: linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            border-radius: 30px;
            border: 1px solid #000c0e;
            cursor: pointer;
        }
        .loginbtn:hover
        {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
            background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
            background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        }
        </style
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal_it/All product  </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chango&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body > 
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="image/dealit.png" alt="" >
            </div>
            <nav>
                <ul> <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="account.php">Account</a></li>

                </ul>
            </nav>
            <a href="cart.php"><img src="image/cart.png" class="im" style="margin-right: 20px;"></a>
        
        </div>
    
    </div>
</div><br?<br>

<!------------account page-->


<!------------footer-->
<div class="logincontent">
    <div class="loginheading">
        Login
    </div>
    <label for="txtUserName">
        Username:</label>
    <input type="text" id="txtUserName" name="txtUserName" />
    
    <label for="txtPassword">
        Password:</label>
    <input type="password" id="txtPassword" name="txtPassword" />
    <div class="loginremember">
        <input type="checkbox" id="chbRemember" name="chbRemember" /><label class="check"
            for="chbRemember">Remember me next time</label>
        <input type="submit" class="loginbtn" value="Login" id="btnSubmit"  />
    </div>
    
</div>
<!-----------js for product garlary------->

    
</body>
</html>