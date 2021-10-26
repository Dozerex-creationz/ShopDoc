<!doctype html>
<html>
<head>

<title>Settings</title>
<link rel='stylesheet' href='../text/Css/settings.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    include "../text/Php/accessUser.php";?>

 <a id="top"></a>   
<header class="theme-light">
<div class="titleCard">
    <i class="fab fa-medrt"></i>  ShopDoc
</div>
<nav class="theme-light">
    <ul>
        <li><a href='../user/index.php'  ><i class="fas fa-home fa-3x"></i><span class="hidden navtag">Home</span></a></li>
        <li><a href="shop.php" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="cart.php" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="profile.php" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="contact.php" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="#top" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>
<main>
<fieldset>
    <legend>Page settings:</legend>
    <span class="setting"><em>Change the theme of the web-app:</em><button id="theme" style="float:right">Change theme</button></span>
</fieldset>
<fieldset>
    <legend>Profile settings:</legend>
    <span class="setting"><em>Delete the history of purchase:</em><button id="theme" style="float:right" onClick="window.location.assign('Functions/deleteOrderHistory.php')">Delete order history</button></span>
    <span class="setting"><em>Empty your shopping cart:</em><button id="theme" style="float:right" onClick="window.location.assign('Functions/clearCart.php')">Empty cart</button></span>
    <span class="setting"><em>Leave this profile:</em><button id="theme" style="float:right" onClick="window.location.assign('Functions/logOut.php')">Log Out</button></span>

</fieldset>

</main>
<footer class="theme-light flex-row">
    <ul>
        <li><a href="https://www.google.com" target="_blank"><i class="fab fa-google fa-0.8x"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
<div style="text-align:center"> <code>.A ShopDoc product.</code></div>
</footer>
<script src='../text/Js/scripts.js'></script>
<script src='../text/Js/theme.js'></script>

</body>

</html>