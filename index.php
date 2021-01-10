<?php 
include 'functions.php';

// VERNANDA SEPTIA WANANDI
// https://github.com/vernandaspw/kasir3
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir vernanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container  d-flex justify-content-center mt-1">
        <div class="col-md-6">
            <hr>
            <center>
                <h5>Vernanda Septia Wanandi</h5>
                <h6>021180005</h6>
                <a href="https://github.com/vernandaspw/kasir3">https://github.com/vernandaspw/kasir3</a>
            </center>
            <hr>
            <ul class="nav nav-tabs mt-3">
                <li class="nav-item">
                    <a href="index.php?h=form" class="nav-link 
                                <?php if($h == "form"){ 
                                ?> active <?php 
                                }; ?>
                                ">Form Kasir</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?h=data" class="nav-link
                                <?php if($h == "data"){ 
                                ?> active <?php 
                                }; ?>
                                ">Data Penjualan</a>
                </li>
            </ul>
            <?php 
            if ($h == "form") {
                include "form_kasir.php";
            } else if ($h == "data") {
                include "data_penjualan.php";
            }else if ($h == "hasil") {
                include "hasil.php";
            }else if ($h == "edit") {
                include "edit.php";
            }else if ($h == "editproses") {
                include "edit_proses.php";
            }
            ?>
        </div>
    </div>

    <!-- bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>