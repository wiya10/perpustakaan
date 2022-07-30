<div class="card">
    <div class="card-header">
        Data buku
    </div>
    <div class="card-body">
        <a href="media.php?halaman=tambah_buku" class="btn btn-sm btn-primary mb-3">tambah data</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Nama Pengarang</th>
                    <th>Nama Penerbit</th>
                    <th>Kategori Buku</th>
                    <th>Jumlah</th>
                    <th>Gambar Buku</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $no = 1;
                    // untuk melakukan relasi JOIN (dilakukan sebanyak yg direlasikan) / ON
                    $ambil_data = mysqli_query($koneksi, "SELECT * FROM buku JOIN pengarang JOIN kategori JOIN penerbit 
                    ON buku.pengarang=pengarang.kode_pengarang 
                    AND buku.kategori=kategori.kode_kategori AND buku.penerbit=penerbit.kode_penerbit");
                    // end relasi
                    while ($data = mysqli_fetch_array($ambil_data)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['kode_buku'] ?></td> 
                            <td><?php echo $data['judul_buku'] ?></td>
                            <td><?php echo $data['nama_pengarang'] ?></td>
                            <td><?php echo $data['nama_penerbit'] ?></td>
                            <td><?php echo $data['nama_kategori'] ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><img src="gambar/<?php echo $data['foto'] ?>" alt="" width="40px"></td>
                            <td>
                                <a href="media.php?halaman=ubah_buku&&id=<?php echo $data['kode_buku']  ?>" class="btn btn-sm btn-success">edit</a>
                            </td>
                            <td>
                                <a href="media.php?halaman=crud&&hapus_buku=<?php echo $data['id_buku'] ?>" class="btn btn-sm btn-danger">hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


