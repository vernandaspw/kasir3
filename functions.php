<?php
$conn = mysqli_connect("localhost","root","","pwl_kasir2");
if (!$conn){
    die ("koneksi gagal");
}

// VERNANDA SEPTIA WANANDI
// https://github.com/vernandaspw/kasir3


$h = "form";
if (!empty($_GET['h'])) {
    $h = $_GET['h'];
}

function alertedit() {
    if(!empty($_GET['e'])){
        if($_GET['e'] == "1"){
    ?>
<div class="alert alert-success">
    <strong>Berhasil,</strong> Data berhasil diperbarui
</div>
<?php
    }else if($_GET['e'] == "2"){
                        ?>
<div class="alert alert-danger">
    <strong>Maaf !</strong> Data gagal diperbarui
</div>
<?php
                        }
                    }
                
    }

function alerthapus() {
    if(!empty($_GET['s'])){
        if($_GET['s'] == "1"){
    ?>
<div class="alert alert-success">
    <strong>Berhasil,</strong> Data berhasil dihapus
</div>
<?php
    }else if($_GET['s'] == "2"){
                        ?>
<div class="alert alert-danger">
    <strong>Maaf !</strong> Data gagal dihapus
</div>
<?php
                        }
                    }
                
    }