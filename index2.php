
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>online shope</title>
</head>
<body>
<header id="header">
        <?php
    include('config.php');
    $ID=0;
    $result=mysqli_query($con,"SELECT * FROM corp  WHERE ID = $ID");
    echo"
    <a href='index.php?id=$ID'><img src='images/logo.png' id='logo'></a>
    <div>
    <ul id='navbar'>
    <li><a  href='index.php?id=$ID'>Homme</a></li>
    <li><a  href='index1.php?id=$ID'>Shop</a></li>
    <li><a class='active' href='index2.php?id=$ID'>Add</a></li>
    <li><a href='about.php?id=$ID'>About</a></li>
    <li><a href='contact.php?id=$ID'>Contact</a></li>
     <a  href='index4.php?id=$ID' ><i class='fa-solid fa-bag-shopping'></i></a></li>";
                ?>
            </ul>
        </div>
</header><br><br><br>
    <centere >
        <div class="form-container">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h3 class="maine">Add Product</h3>
                <input type="text" name="name"  placeholder=" Product Name " class="box"><br>
                <input type="text" name="price"  placeholder=" Produt Price" class="box"><br>
                <input type="tel" name="phone"  placeholder=" Phone Number" class="box"><br>
                <textarea name="commentair"  cols="32" rows="2" maxlength="100" placeholder=" Description"class="box"></textarea><br>
                <input type="file" name="image" id="file" style="display: none;">
                <label for="file" class="file">Add images</label>
                <input type="submit" name="upload" value="Insert Now" required="" class="upload">
            </form> 
        </div>
    </centere>
        </section>
     <section id="nwesletter" class="pl">
        <div class="nwestex">
            <h4>Sing Up for nwesletter </h4>
            <p> Get E-mail update about latest shop and <span>special offers.</span></p>
        </div>
        <div class="from">
            <input class="normal" type="text" placeholder="Your Email Adresse">
            <button class="normal1">Sing Up</button>
        </div>
     </section><br>
     <footer class="section1">
    <div class="col">
        <img class="logo2" src="images/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Adresse :</strong> Morocco casablanca</p>
        <p><strong>Phone :</strong> +212 766-704843</p>
        <p><strong>Hours :</strong> 10:00 - 18:00 , mon - sat</p>
        <div class="follow">
            <h4 class="h4">Follow us</h4>
        <div class="icons">
        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
           </div>  
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">privacy Policy</a>
        <a href="#">Contact us</a>
    </div>
    <div class="col">
        <h4>My Acount</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
    <h4>Instal App</h4>
    <p>From App stor or Google Play</p>  
    <div class="row">
    <img src="images/pay/app.jpg" alt="">
    <img src="images/pay/play.jpg" alt="">
    </div>
    <p>Secured Payment Geteways</p>
    <img src="images/pay/pay.png" alt="">
    </div>
    <div class="copyright">
    <p>@ 2021, tech2 -Html Css Ecommerce Template</p>
    </div>
     </footer>
</body>
</html>