<?php
include 'functions.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM kasir where id='$id'");
if ($query) {
    $status = "1";
}else{
    $status = "2";
}

echo "<script>window.location.href='index.php?h=data&s=$status'</script>";