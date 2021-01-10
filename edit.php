<?php 
@$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kasir WHERE id ='$id' ");
$data = mysqli_fetch_assoc($query);

@$belanja = $data['belanja'];
@$bayar = $data['bayar'];
@$kembalian = $data['kembalian'];

?>
<?php alertedit() ?>
<div class="card mt-3">
    <div class="card-header">
        EDIT
    </div>
    <div class="card-body">
        <form action="index.php?h=editproses&id=<?= $data['id']?>" method="post">
            <div class="form-group">
                <label for="belanja">Nominal Belanja</label>
                <input type="number" name="editbelanja" id="belanja" placeholder="Masukan nominal belanja"
                    value="<?= $belanja; ?>" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="bayar">Nominal Bayar</label>
                <input type="number" name="editbayar" id="bayar" placeholder="Masukan nominal bayar"
                    value="<?= $bayar; ?>" class="form-control" aria-describedby="helpId">
            </div>
            <button type="submit" name="edit" class="btn btn-success form-control mt-3">Edit</button>
        </form>
    </div>
</div>