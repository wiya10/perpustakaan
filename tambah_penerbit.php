<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="crud.php" method="POST">
            <div class="form-group">
                <div class="mb-3">
                    <label for="">Kode penerbit</label>
                    <input type="text" name="kode" class="form-control" placeholder="masukan kode penerbit">
                </div>
                <div class="mb-3">
                    <label for="">Nama penerbit</label>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama penerbit">
                </div>
                <button type="submit" name="simpan_penerbit" class="btn btn-sm btn-primary">simpan data</button>
            </div>
        </form>
    </div>
</div>