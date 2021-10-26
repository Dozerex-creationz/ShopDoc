<!doctype html>
<html>
<head>

<title>Your Cart</title>

<link rel='stylesheet' href='../text/Css/HomeStyle.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel='stylesheet' href='../text/Css/shop.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 <a id="top"></a>   
<header class="theme-light">
<div class="titleCard">
    <i class="fab fa-medrt"></i>  ShopDoc
</div>
<nav class="theme-light">
    <ul>
        <li><a href='../user/index.php' ><i class="fas fa-home fa-3x"></i><span class="hidden navtag">Home</span></a></li>
        <li><a href="shop.php" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="#top" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="profile.php" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="contact.php" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="settings.php" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>
<main>
    <?php include '../text/Php/accessItem.php';?>
    <fieldset STYLE="min-height:50vh;">
        <legend>Your Cart:</legend>
        <div CLASS="itemContainer">
        <script>
            function changeData(val,pid)
            {   console.log(val+" "+pid)
                xhttp=new XMLHttpRequest();
                var data="count="+val+"&pid="+pid;
                console.log(data);
                xhttp.open("POST","../text/Php/updateTemp.php",true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(data);
                console.log("success");
                xhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200)
                    {   console.log(this.responseText);
                    }
                }    
            }
        </script>     
        <div class="innerItemContainer">
        <?php
            $user=$_SESSION["userId"];
            $allQuery="select * from cart_list WHERE User_ID='$user'";
            $res=mysqli_query($con,$allQuery);
            while($Pid=mysqli_fetch_row($res))
            {
            $allCheckQuery=mysqli_query($con,"select * from product_details where Product_ID='$Pid[2]'");
            
            while($row=mysqli_fetch_array($allCheckQuery)){
                echo ' <div class="item '.$row[3].'" id="item'.$row[0].'">
                <div class="itemImg" ></div>
                <div class="itemDesc" ><h4>'.$row[4].'</h4><p>'.$row[5].'</p></div>
                <div class="itemChange">
                    <div class="changeItem" id=changeItem'.$row[0].'>
                        <button class="add" id="add'.$row[0].'">+</button>
                        <div class="numberOfItem" id="noi'.$row[0].'">'.$row[6].'</div>
                        <button class="remove" id="rem'.$row[0].'">-</button>
                    </div>

                    <div class="stock" id="stockOf'.$row[0].'">'.$row[1].'</div>
                </div>
                </div>';

                echo "<script> 
                
                const add".$row[0]."=document.getElementById('add".$row[0]."');    
                const noi".$row[0]."=document.getElementById('noi".$row[0]."');    
                const rem".$row[0]."=document.getElementById('rem".$row[0]."');    
                var new".$row[0]."=".$row[6].";
                add".$row[0].".addEventListener('click',()=>{
                    new".$row[0]."=new".$row[0]."+1;
                    noi".$row[0].".innerHTML=new".$row[0].";
                    changeData(new".$row[0].",".$row[0].");
                })
                rem".$row[0].".addEventListener('click',()=>{
                    if(new".$row[0]."!=0){
                    new".$row[0]."=new".$row[0]."-1;                    
                    noi".$row[0].".innerHTML=new".$row[0].";
                    changeData(new".$row[0].",".$row[0]."); 
                  }
            })
                </script>";
    
            }
        }
            ?>
        </div>
    </fieldset>
<a href="Functions/pay.php"><button ><span class="pay"> <i class="fas fa-rupee-sign "></i> </span></button></a>
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
</body>

</html>