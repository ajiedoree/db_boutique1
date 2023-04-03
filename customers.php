<?php
include "connect.php";
$dbboutique = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="customers.css">
<title>DATA PELANGGAN</title>
</head>
<body>

<div class="all">
<h4>We Provide You the Best Quality</h4>
</div>
</div>

<div class="nav">
        <hr>
        <h2> AJIEDORE </h2>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="customers.php" >CUSTOMERS</a></li>
            <li><a href="product.php" >PRODUCT</a></li>
            <li><a href="men">MEN</a></li>
            <li><a href="women">WOMEN</a></li>
            <li><a href="beauty">BEAUTY</a></li>
            <li><a href="transaction.php">TRANSACTION</a></li>
        </ul>
    </div>

<center>
    <div class="table1">
        <h2 style="text-align: center; margin-bottom: 20px;">DATA PELANGGAN</h2>
        <table border="3px" cellspacing="0" cellpadding ="6px" border="4" width="80%" style="text-align: center;
            font-size:15px; margin-bottom: 20px;">
        
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama Pelanggan</th>
                <th style="text-align: center;">Usia</th>
                <th style="text-align: center;">Alamat</th>
                <th style="text-align: center;">Email</th>
                <th style="text-align: center;">Size</th>
            </tr>

            <?php

            $no = 1;
            foreach($dbboutique->tampilpelanggan()as $x) {
            ?>

            <tr>
                <td><?php echo $no ++;?></td>
                <td><?php echo $x ['nama_pelanggan'];?></td>
                <td><?php echo $x ['usia'];?></td>
                <td><?php echo $x ['alamat'];?></td>
                <td><?php echo $x ['email'];?></td>
                <td><?php echo $x ['size'];?></td>
            </tr>
            <?php } ?>
            
        
        </table>
    </div>
</center>

</body>
</html>