<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link rel="stylesheet" href="../../text/Css/pay.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css"
      integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div>
<?php
include '../../text/Php/accessUser.php';
$cost=0;

function calcCost($pid,$num){
    $con=mysqli_connect("localhost","root","","shopdoc");
    $get=mysqli_query($con,"SELECT Cost from product_details where Product_ID='$pid'");
    $costArray=mysqli_fetch_array($get);
    $cost=$num*$costArray[0];
    return $cost;
}

$new=mysqli_query($con,"SELECT Product_ID,Number from cart_list Where User_ID='$userId'");
while($ren=mysqli_fetch_array($new)){
    $cost=$cost+calcCost($ren[0],$ren[1]);
}

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['pay']))
    {
        pay($cost);
    }
function pay($cost){
    $con=mysqli_connect("localhost","root","","shopdoc");
    $user=$_SESSION["userId"];
    if($cost!=0){
    $history=mysqli_query($con,"Insert into purchase_history (User_ID,Cost) values ('$user','$cost')");
    $storeExistingTemp=mysqli_query($con,"select * from cart_list WHERE User_ID='$user'");
    while($rowResult=mysqli_fetch_row($storeExistingTemp)){
    $updateTempCount=mysqli_query($con,"Update product_details SET tempCount=0,Stock-='$rowResult[3]' WHERE Product_ID='$rowResult[2]'");}
    $get=mysqli_query($con,"delete FROM cart_list where User_ID='$user'");
    header("Refresh:1");
    }
    
}

?>

<h1 id='cont'> The Amount Payable is: ₹<?php echo $cost;?>/-</h1>
<div class="btns"><button onclick="window.location.assign('../cart.php')">Go Back to cart</button><form method="POST"><INPUT type="submit" name="pay" value="₹ Pay Now"></form></div>
<a href="../cart.php" class="back"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</div>

</body>
</html>