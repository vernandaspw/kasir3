<?php 

$belanja = $_POST['belanja'];
$bayar = $_POST['bayar'];
$kembalian = $bayar-$belanja;

if ($bayar == $belanja) {
    $status = "Uang Pas!";
} elseif ($bayar > $belanja) {
    $status = "Uang Cukup!";
} else {
    $status = "Uang Kurang!";
}

$simpan = mysqli_query($conn, "INSERT INTO kasir SET belanja='$belanja', 
                                                        bayar='$bayar', 
                                                        kembalian='$kembalian' ");
?>


<div class="container">
    <div class="mt-2">
        <?php
            if($simpan){ ?>
        <div class="alert alert-success">
            <strong>Berhasil!</strong> Data berhasil disimpan
        </div>

        <?php
            }else{ ?>
        <div class="alert alert-danger">
            <strong>Gagal!</strong> Data gagal disimpan
        </div>
        <?php
            }?>

        <div class="card shadow">
            <div class="card-header">
                <b>HASIL PROSES</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Nominal belanja</td>
                        <td>: <?php echo $belanja ?></td>
                    </tr>
                    <tr>
                        <td>Nominal bayar</td>
                        <td>: <?php echo $bayar ?></td>
                    </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>: <?php echo $kembalian; ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            : <?php echo $status; ?>
                        </td>
                    </tr>
                </table>
                <a class="btn btn-warning" href="index.php">Kembali</a>
            </div>
        </div>
    </div>
</div>