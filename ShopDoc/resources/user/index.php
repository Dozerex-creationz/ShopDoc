<!doctype html>
<html>
<head>

<title>ShopDoc</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- stylesheets -->
<link rel='stylesheet' href='../text/Css/HomeStyle.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- end of stylesheets -->


</head>
<body>
 <a id="top"></a>   
<header class="theme-light">
<div class="titleCard">
    <span><i class="fab fa-medrt"></i> ShopDoc</span>
</div>
<nav class="theme-light">
    <ul>
        <li><a href="#top" ><i class="fas fa-home fa-3x"></i><span class="hidden navTag">Home</span></a></li>
        <li><a href="../pages/shop.php" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="../pages/cart.php" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="../pages/profile.php" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="../pages/contact.php" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="../pages/settings.php" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>
<main class="theme-light">
    
    
<div class="WelcomeMsg" id="WelcomeMsg">
    <div class="user">
    <h3 class="nameUser">Hi! <?php session_start(); echo ucfirst($_SESSION["name"])?></h3>
    </div>
    <!-- insert the introduction of the project in this area -->
    <BR><BR>
    <h1 STYLE="COLOR:rgb(86, 146, 45);text-align:center;">WELCOME TO SHOPDOC!</h1>
</div>

<div class="flexRow" >

</div>
</main>
<footer class="theme-light flex-row">
    <ul>
        <li><a href="https://www.google.com" target="_blank"><i class="fab fa-google fa-0.8x"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
<div > <code>.A ShopDoc product.</code></div>
</footer>
<script src='../text/Js/scripts.js'></script>
</body>

</html>
