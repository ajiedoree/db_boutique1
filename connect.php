<?php
    class database {
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_boutique';

        function __construct() {
            $koneksi = mysqli_connect($this->host, $this->name,
                $this->pw, $this->db);
            mysqli_select_db($koneksi, $this->db);
        }

        // Koneksi pelanggan
        function tampilpelanggan(){
            $koneksi = mysqli_connect($this->host, $this->name,
                $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
            while($d = mysqli_fetch_array($data)){
                $hasil[]=$d;
            }
            return $hasil;
        }
    

    // Koneksi produk

    function tampilproduk(){
        $koneksi = mysqli_connect($this->host, $this->name,
            $this->pw, $this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM tb_produk_boutique");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }    
    
    function tampiltransaksi(){
        $koneksi = mysqli_connect($this->host, $this->name,
            $this->pw, $this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
}

?>