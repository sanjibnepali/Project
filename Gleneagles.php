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
                    <li><a href="logins.php">login</a></li>

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
            <a href="Gleneagles.php"> <img src="image/9.jpg">
                ></a>
            


        </div>
        <div class="col-2">
            <p>Home /shoes</p>
            <h1>Gleneagles</h1>
            <h4>$80.00</h4>
            <select name="" id="">
                <option value="">select size</option>
                <option value="">30</option>
                <option value="">32</option>
                <option value="">33</option>
                <option value="">34</option>



            </select>
            <input type="number" value="1"> 
            <a href="cart.php" class=> add to cart</a>
            <h3>product details <i class="fa fa-indent"></i></h3>
            <br>
            <p>GLENEAGLES MENS UK Size 8 CHESTNUT BROWN SOFT LEATHER<br></p>
        </div>
    </div>
</div>
<!--------------title-->
<div class="smallcontainer" style="margin-top: 30px; margin-bottom: 10px;" >
    <div class="row">
        <h2>Related product</h2>
        <p> <a href="product.php">view more</a> </a></p>
    </div>
</div>
<!-----------product-->

    <div class="small-container" style="margin-top: 30px;">
        
        
        <div class="row">
            <div class="col-4">
                <a href="productdetails.php"> <img src="image/8.jpg"" alt=""></a>
                <h4>Goldstar-The choice of Nepal</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$70.00</p>
            </div>
            <div class="col-4">
                <a href="Gleneagles.php"> <img src="image/9.jpg" alt=""></a>
                <h4>Gleneagles-show your style</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$80.00</p>
            </div>
            <div class="col-4">
                <a href="ParnamiFootwear.php"><img src="image/10.jpg" alt=""></a>

                <h4>Parnami Footwear -play with the best one</h4>
                <div class="rating" >
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$100.00</p>
                
                
            </div>
            
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