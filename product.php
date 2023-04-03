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
<link rel="stylesheet" type="text/css" href="product.css">
<title>DATA PRODUK</title>
</head>
<body>

<div class="all">
    <h4>See The Product Data Of Our Collections Here!</h4>
</div>
</div>

<div class="nav">
        <hr>
        <h2> AJIEDORE </h2>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="customers.php" >CUSTOMERS</a></li>
            <li><a href="product.php">PRODUCT</a></li>
            <li><a href="men">MEN</a></li>
            <li><a href="women">WOMEN</a></li>
            <li><a href="beauty">BEAUTY</a></li>
            <li><a href="transaction.php">TRANSACTION</a></li>
        </ul>
    </div>

<center>
    <div class="table1">
        <h2 style="text-align: center; margin-bottom: 20px;">DATA PRODUK</h2>
        <br>
        <table border="3px" cellspacing="0" cellpadding ="6px" border="4" width="80%" style="text-align: center;
            font-size:15px; margin-bottom: 20px;">
            
        
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama Produk</th>
                <th style="text-align: center;">Merk Produk</th>
                <th style="text-align: center;">Warna Produk</th>
                <th style="text-align: center;">Harga</th>
            </tr>

            <?php

            $no = 1;
            foreach($dbboutique->tampilproduk()as $x) {
            ?>

            <tr>
                <td><?php echo $no ++;?></td>
                <td><?php echo $x ['nama_produk'];?></td>
                <td><?php echo $x ['merk_produk'];?></td>
                <td><?php echo $x ['warna_produk'];?></td>
                <td><?php echo $x ['harga'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</center>
</body>
</html>