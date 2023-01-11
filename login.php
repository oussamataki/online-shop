<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, hash('sha256', $_POST['password']));
   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index2.php');
   }else{
      $message[] = 'incorrect password or email!';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="style3.css">
</head>
<body>
<header id="headere">
        <?php
    include('config.php');
    $ID=$_GET['id'];
    $result=mysqli_query($con,"SELECT * FROM corp  WHERE ID = $ID");
    echo"
    <a href='index.php?id=$ID'><img src='images/logo.png' id='logo'></a>
    <div>
    <ul id='navbar'>
    <li><a  href='index.php?id=$ID'>Homme</a></li>
    <li><a  href='index1.php?id=$ID'>Shop</a></li>
    <li><a  href='login.php?id=$ID'>Add</a></li>
    <li><a href='about.php?id=$ID'>About</a></li>
    <li><a href='contact.php?id=$ID'>Contact</a></li>
     <a  href='index4.php?id=$ID' ><i class='fa-solid fa-bag-shopping'></i></a></li>";
                ?>
            </ul>
        </div>
</header><br><br><br>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>  
<div class="form-container">
   <form action="" method="post">
      <h3>Login</h3>
      <input type="email" name="email" required placeholder="E-mail" class="box"><br>
      <input type="password" name="password" required placeholder="password" class="box"><br>
      <input type="submit" name="submit" class="btn" value="sign in"><br>
      <?php
    include('config.php');
    $ID=$_GET['id'];
    $result=mysqli_query($con,"SELECT * FROM corp  WHERE ID = $ID");
    echo"
    <p> Do you  have an account?<a href='register.php?id=$ID'> new account</a></p>
   ";
   ?>
   </form>
</div>
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