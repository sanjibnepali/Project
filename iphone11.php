<!DOCTYPE html>
<html lang="en">
<head>
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
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="login.php">login</a></li>

                </ul>
            </nav>
            <a href="cart.php"><img src="image/cart.png" class="im" style="margin-right: 20px;"></a>
            
        </div>
    
    </div>
</div><br?<br>
<!----------single product details-->
<div class="singleproduct">
    <div class="row">
        <div class="col-2">
            <a href="ParnamiFootwear.php"><img src="image/11.jpg" alt=""></a>
            


        </div>
        <div class="col-2">
            <p>Mobile and accestories</p>
            <h1>i-phone 11</h1>
            <h4>$899</h4>
            <select name="" id="">
                <option value="">select color</option>
                <option value="">red</option>
                <option value="">Green</option>
                <option value="">yellow</option>
                <option value="">blue</option>


            </select>
            <input type="number" value="1"> 
            <a href="cart.php" class=> add to cart</a>
            <h3>product details <i class="fa fa-indent"></i></h3>
            <br>
            <p>Apple iPhone 11 ?? Released 2019, September 20 ??<br> 194g, 8.3mm thickness ?? iOS 13<br></p>
        </div>
    </div>
</div>
<!--------------title-->
<div class="smallcontainer" style="margin-top: 30px; margin-bottom: 10px;" >
    <div class="row">
       
        <p> <a href="product.php">view more</a> </a></p>
    </div>
</div>



<!------------footer-->
<footer style=" background-color: rgb(104, 131, 153); background-size: cover;">
    <div class="footer-content">
        <h3>Deal-It Store</h3>
        <p>Buy and sell online product on affordable price with better quality!</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com"target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.google.com.np"target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.youtube.com"target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li><br>

        </ul>
        <h1 style="font-size: 20px; margin-bottom: 10px; color: rgb(24, 10, 10);">Contact-us +977032165464  /dealitstore@gmail.com</h1>
    </div>
    <div class="footer-bottom">
        <p style="font-size: 20px;">copyright &copy;2021Deal_it. designed by Sanjib</p>
       
    </div>
</footer>
<!-----------js for product garlary------->
<script>
    var productimg=document.getElementById("productimg");
    var SmalllImg=document.getElementsByClassName("a");

    SmalllImg[0].onclick=function(){
        productimg.src=SmalllImg[0].src;
    }
    SmalllImg[1].onclick=function(){
        productimg.src=SmalllImg[1].src;
    }
</script>
    
</body>
</html>