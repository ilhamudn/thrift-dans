<?php
$tittle = 'Views';

require_once 'database/conn.php';
require_once 'includes/header.php';

$results = $crud->get();
?>

    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama barang</th>
                    <th scope="col">harga</th>
                    <th scope="col">stok</th>
                    <th scope="col">keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?php echo $r['nama_brg'] ?></td>
                    <td><?php echo $r['harga'] ?></td>
                    <td><?php echo $r['stok'] ?></td>
                    <td><?php echo $r['keterangan'] ?></td>
                    <td>
                        <a href=edit.php?id=<?php echo $r['nama_brg']?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<?php require_once 'includes/footer.php' ?>