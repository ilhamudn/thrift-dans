<?php
$tittle = 'Succes';
require_once 'database/conn.php';
require_once 'includes/header.php';

if(isset($_POST['submit'])){
    $nama_brg = $_POST['nama_brg'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];

    $isSucces = $crud->insert($nama_brg, $harga, $stok, $keterangan);
} if($isSucces){
    echo 'mantap';
}else{
    echo 'blok';
}
?>

<h1></h1>
<section class="container">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">data barang</h3>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama Barang</th>
                <th scope="col">harga</th>
                <th scope="col">stok</th>
                <th scope="col">keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST['nama_brg'] ?></td>
                    <td><?php echo $_POST['harga'] ?></td>
                    <td><?php echo $_POST['stok'] ?></td>
                    <td><?php echo $_POST['keterangan'] ?></td>
                </tr>
            </tbody>
            </table>
        </div>
      </div>
</section>

<?php require_once 'includes/footer.php' ?>