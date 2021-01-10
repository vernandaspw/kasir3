<?php

$id = $_GET['id'];
$belanja = $_POST['editbelanja'];
$bayar = $_POST['editbayar'];
$kembalian = $bayar-$belanja;

$update = mysqli_query($conn, "UPDATE kasir SET belanja = '$belanja', bayar = '$bayar', kembalian = '$kembalian' WHERE id='$id' ");
if ($update) {
    $status = '1';
} else {
    $status = '2';
}


echo "<script>window.location.href='index.php?h=data&h=edit&id=$id&e=$status'</script>";