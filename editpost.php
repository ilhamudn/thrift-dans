<?php
require_once 'database/conn.php';
if(isset($_POST['submit'])){
    $nama_brg = $_POST['nama_brg'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];
    $results = $crud->edit($nama_brg,$harga,$stok,$keterangan);
    
    if ($results){
        header('Location: dashboard.php');
    }else{
        echo 'error';
    }
    
}else{
    echo 'blok';
}