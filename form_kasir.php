<div class="card mt-3">
    <div class="card-header">
        FORM KASIR SEDERHANA
    </div>
    <div class="card-body">
        <form action="index.php?h=hasil" method="post">
            <div class="form-group">
                <label for="belanja">Nominal Belanja</label>
                <input type="number" name="belanja" id="belanja" placeholder="Masukan nominal belanja"
                    class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="bayar">Nominal Bayar</label>
                <input type="number" name="bayar" id="bayar" placeholder="Masukan nominal bayar" class="form-control"
                    aria-describedby="helpId">
            </div>
            <button type="submit" name="hitung" class="btn btn-success form-control mt-2">HITUNG</button>
        </form>
    </div>
</div>