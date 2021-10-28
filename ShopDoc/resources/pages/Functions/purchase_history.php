<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link rel="stylesheet" href="../../text/Css/admin.css">
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

<h1>Welcome to Admin mode!</h1>
<?php include "../../text/Php/accessItem.php";?>
<div>
  <table>
    <thead>
      <td>Customer Name</td>
      <td>Amount paid</td>
      <td>Date of purchase</td>
      <td>Purchase ID</td>
    </thead>
    <tbody>
    <?php 
    $rest=mysqli_query($con,"SELECT * from purchase_history order by Purchase_ID desc");
    while($rown=mysqli_fetch_array($rest)){
    $new=mysqli_query($con,"SELECT User_Name from entry_log where User_ID='$rown[1]'");
    $newName=mysqli_fetch_array($new);
    $name=$newName[0];
    $dop=$rown[3];
    $Amt=$rown[2];
    $PurId=$rown[0];
    echo "<tr><td>".$name."</td><td>".$Amt."</td><td>".$dop."</td><td>".$PurId."</td></tr>";
    }
    ?>
    </tbody>
  </table>
  </div>

<a href="admin.php" class="back"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</div>

</body>
</html>