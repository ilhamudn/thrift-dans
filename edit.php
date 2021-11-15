<?php
$tittle = 'edit';
require_once 'database/conn.php';
require_once 'includes/header.php';
?>

<div class="container">
    <form method="POST" action="editpost.php">
    <div class="mb-3">
        <label class="form-label">nama barang</label>
        <input type="text"  name="nama_brg" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" class="form-control" name="harga" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number"  class="form-control" name="stok" required>
    </div>
    <div class="mb-3">
        <label class="form-label">keterangan</label>
        <input type="text"  class="form-control" name="keterangan">
    </div>
    <button type="submit" name="submit" class="btn btn-success">Edit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>

<?php require_once 'includes/footer.php' ?>