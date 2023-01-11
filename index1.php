<!DOCTYPE html>
<html lang="en">
<head>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style5.css">
    <title>online shope</title>
</head>
<body>
<header id="header">
        <?php
    include('config.php');
    $ID=$_GET['id'];
    $result=mysqli_query($con,"SELECT * FROM corp  WHERE ID = $ID");
    echo"
    <a href='index.php?id=$ID'><img src='images/logo.png' id='logo'></a>
    <div>
            <ul id='navbar'>
                <li><a  href='index.php?id=$ID'>Homme</a></li>
                <li><a class='active' href='index1.php?id=$ID'>Shop</a></li>
                <li><a  href='login.php?id=$ID'>Add</a></li>
                <li><a href='about.php?id=$ID'>About</a></li>
                <li><a href='contact.php?id=$ID'>Contact</a></li>
                 <a  href='index4.php?id=$ID' ><i class='fa-solid fa-bag-shopping'></i></a></li>";
                ?>
                 <p></p>
            </ul>
        </div>
</header><br><br><br>
    <section id="hero2"> <br>
    <h1>#Save your money</h1>
    </section>
    <section class="lgd"> 
    <?php
    include('config.php');
$sum=1;
if(isset($_POST['read2'])){
    $sum=$_POST['sum'];
    $sum--;
    if($sum==0){
        $sum=1;
    }
}
if(isset($_POST['read'])){
    $sum=$_POST['sum'];
    $sum++;  
}
while($y!=0){ 
if($sum==$s){
    $ID=$ID+$r;
   }
   $s++;
   $r=$r+8;
$y--;
}
    while($x!=0){ 
    $result=mysqli_query($con,"SELECT * FROM corp  WHERE ID = $ID");
    while($row=mysqli_fetch_array($result)){ 
     echo" 
        <main>
        <div class='cart'  style=' margin-left: -40px;
        margin-right:-40px;'>
        <div  id='card'>
        <div class='card-body'>
        <a href='index3.php?id=$ID'>
        <img src='$row[image]' class='card-img-top'></a>
        <span>cara</span>
        <p class='card-text'>$row[name]</p>
        <div class='star'>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
     </div>
        <p class='card-text2'>$$row[price]</p> 
        <a href='index4.php?id=$ID' ><i class='fa-solid fa-cart-plus carde'></i></a>
        </div> 
      </div>
      </div>
      </main> 
      ";
    }
    $x--; 
    $ID++;
      }   

?>
  </section> 
  <section class="lgd"> 
    <?php
    include('config.php');
    $sum=1;
    if(isset($_POST['read2'])){
        $sum=$_POST['sum'];
        $sum--;
        if($sum==0){
            $sum=1;
        }
        $ID3=$ID3-$s;
    }
    if(isset($_POST['read'])){
        $sum=$_POST['sum'];
        $sum++; 
    }
    while($y!=0){ 
        if($sum==$s){
            $ID2=$ID2+$r;
           }
        $s++;
        $r=$r+8;
        $y--;
        }
    while($x!=0){ 
    $result=mysqli_query($con,"SELECT * FROM corp  WHERE ID = $ID2");
    while($row=mysqli_fetch_array($result)){ 
     echo" 
        <main>
        <div class='cart'  style=' margin-left: -40px;
        margin-right:-40px;'>
        <div  id='card'>
        <div class='card-body'>
        <a href='index3.php?id=$ID2'>
        <img src='$row[image]' class='card-img-top'></a>
        <span>cara</span>
        <p class='card-text'>$row[name]</p>
        <div class='star'>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
     </div>
        <p class='card-text2'>$$row[price]</p> 
        <a href='index4.php?id=$ID2' ><i class='fa-solid fa-cart-plus carde'></i></a>
        </div> 
      </div>
      </div>
      </main> 
      ";
    }
    $x--; 
    $ID2++;
      }     
?>
</section> 
<?php
$sum=1;
if(isset($_POST['read2'])){
    $sum=$_POST['sum'];
    $sum--;
    if($sum==0){
        $sum=1;
    }
}
if(isset($_POST['read'])){
    $sum=$_POST['sum'];
    $sum++;
}
echo"
  <form id='arrow' class='arrow' method='post'> 
  <input type='submit' name='read2' value='↤' style='background-color: #088178; color: white; width: 60px;
  height: 52px; border-radius: 4px;'>  
  <input type='text' name='sum' value='$sum' style='background-color: #088178; color: white; width: 60px;
  height: 52px; border-radius: 4px;   text-align: center; ' > 
    <input type='submit' name='read' value='↦'style='background-color: #088178; color: white; width: 60px;
    height: 52px; border-radius: 4px;'>
    </form><br><br>";
    ?>
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