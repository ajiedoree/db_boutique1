    <?php

include_once("connect.php");

$query = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.nama_pelanggan, tb_produk_boutique.nama_produk,
tb_transaksi.harga_saat_ini, tb_transaksi.Qty, tb_transaksi.total_pembayaran FROM tb_produk_boutique 
INNER JOIN tb_transaksi 
ON tb_produk_boutique.id_produk_boutique = tb_transaksi.id_produk_boutique
INNER JOIN tb_pelanggan
ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan";
$conn = mysqli_connect("localhost", "root", "", "db_boutique" );

$result = mysqli_query($conn, $query); 

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
<link rel="stylesheet" type="text/css" href="transaction.css">
<title>DATA TRANSAKSI</title>
</head>
<body>

<div class="all">
<h4>Here's The Data Transactions</h4>
</div>
</div>

<div class="nav">
        <hr>
        <h2> AJIEDORE </h2>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="customers.php" style=color:white;>CUSTOMERS</a></li>
            <li><a href="product.php" style=color:white;>PRODUCT</a></li>
            <li><a href="men">MEN</a></li>
            <li><a href="women">WOMEN</a></li>
            <li><a href="beauty">BEAUTY</a></li>
            <li><a href="transaction.php">TRANSACTION</a></li>
        </ul>
    </div>

<center>
    <div class="tabel1">
    <table border="1px" cellspacing="0" cellpadding ="6px" border="0" width="80%" style="text-align: center;
            font-size:15px; margin-bottom: 20px;">
        
        
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama Pelanggan</th>
                <th style="text-align: center;">Nama Produk</th>
                <th style="text-align: center;">Kuantitas</th>
                <th style="text-align: center;">Harga</th>
                <th style="text-align: center;">Total Pembayaran</th>
            </tr>

            <?php

$no = 1;
foreach($result as $x) :

            ?>

            <tr>
                <td><?php echo $no ++;?></td>
                <td><?php echo $x ['nama_pelanggan'];?></td>
                <td><?php echo $x ['nama_produk'];?></td>
                <td><?php echo $x ['Qty'];?></td>
                <td><?php echo $x ['harga_saat_ini'];?></td>
                <td><?php echo $x ['total_pembayaran'];?></td>
            </tr>
            <?php endforeach ?>
            
        
        </table>
    </div>
</center>

</body>
</html>