<!doctype html>
<html>
<head>

<title>Shop your Products</title>

<link rel='stylesheet' href='../text/Css/shop.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<body>
<?php include '../text/Php/accessItem.php';?>

 <a id="top"></a>   


 <header class="theme-light">
<div class="titleCard">
    <i class="fab fa-medrt"></i>  ShopDoc
</div>
<nav class="theme-light">
    <ul>
        <li><a href='../user/index.php'  ><i class="fas fa-home fa-3x"></i><span class="hidden navtag">Home</span></a></li>
        <li><a href="#top" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="cart.php" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="profile.php" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="contact.php" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="settings.php" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>


<main>
    <div class="tabSwitch">
        <div class="tab" id="tablet"> Tablets</div>
        <div class="tab" id="cream"> Creams</div>
        <div class="tab" id="syrup"> Syrups</div>
        <div class="tab" id="vaccine"> Vaccines</div>
        <div class="tab" id="supplements"> Supplements</div>
        <div class="tab" id="other"> Others</div>
    </div>
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
        <div class="innerItemContainer tablets hidden" id="inner-tablet" >
            <h2>Tablets</h2>
            <?php
            $Session_user_id=$_SESSION["userId"];
            $storeExistingTemp=mysqli_query($con,"select * from cart_list WHERE User_ID='$Session_user_id'");
            while($rowResult=mysqli_fetch_row($storeExistingTemp)){
            $updateTempCount=mysqli_query($con,"Update product_details SET tempCount='$rowResult[3]' WHERE Product_ID='$rowResult[2]'");}
            $tabletresult=mysqli_query($con,$tabletQuery);
            while($row=mysqli_fetch_array($tabletresult)){
                echo ' <div class="item" id="item'.$row[0].'">
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
            mysqli_free_result($tabletresult);
            ?>
        </div>
        <div class="innerItemContainer creams" id="inner-cream">
            <h2>Creams</h2>
            <?php 
            $creamresult=mysqli_query($con,$creamQuery);
            while($row=mysqli_fetch_row($creamresult)){
                echo ' <div class="item" id="item'.$row[0].'">
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
            mysqli_free_result($creamresult);
            ?>


        </div>
        <div class="innerItemContainer syrup hidden" id="inner-syrup">
            <h2>Syrups</h2>
            <?php 
            $syrupresult=mysqli_query($con,$syrupQuery);
            while($row=mysqli_fetch_row($syrupresult)){
                echo ' <div class="item" id="item'.$row[0].'">
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
            mysqli_free_result($syrupresult);
            ?>
        </div>
        <div class="innerItemContainer vaccine hidden" id="inner-vaccine">
            <h2>Vaccines</h2>
            <?php 
            $vaccineresult=mysqli_query($con,$vaccineQuery);
            while($row=mysqli_fetch_row($vaccineresult)){
                echo ' <div class="item" id="item'.$row[0].'">
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
            mysqli_free_result($vaccineresult);
            ?>
        </div>
        <div class="innerItemContainer supplements hidden" id="inner-supplement">
            <h2>Supplements</h2>
            <?php 
            $supplementresult=mysqli_query($con,$supplementQuery);
            while($row=mysqli_fetch_row($supplementresult)){
                echo ' <div class="item" id="item'.$row[0].'">
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
            mysqli_free_result($supplementresult);
            ?>
        </div>
        <div class="innerItemContainer other hidden" id="inner-other">
            <h2>Other Goods</h2>
            <?php 
            $otherresult=mysqli_query($con,$otherQuery);
            while($row=mysqli_fetch_row($otherresult)){
                echo ' <div class="item" id="item'.$row[0].'">
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
            mysqli_free_result($otherresult);
            ?>
        </div>
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
<div style="text-align:center"> <code>.A ShopDoc product.</code></div>
</footer>


<script src='../text/Js/shop/tabShift.js'></script>
<script src='../text/Js/scripts.js'></script>
</body>

</html>