<?php
include "koneksi.php";

// crud Buku
// tambah buku

if (isset($_POST['simpan_buku'])) {

    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];

    $simpan_data = mysqli_query($koneksi, "INSERT INTO buku(kode_buku,judul_buku,pengarang,penerbit,kategori,jumlah,foto) 
    VALUES('$kode','$judul','$pengarang','$penerbit','$kategori','$jumlah','$gambar')");
    if ($simpan_data) {
        move_uploaded_file($lokasi_gambar, "gambar/" . $gambar);
        echo "<script>alert('data berhasil disimpan')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    } else {
        echo "<script>alert('data gagal disimpan')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    }
}

// hapus buku
if (isset($_GET['hapus_buku'])) {

    // $ambil_data =mysqli_query($ko)
    $delete_buku = mysqli_query($koneksi, "DELETE FROM buku WHERE  id_buku='$_GET[hapus_buku]'");
    if ($delete_buku) {
        echo "<script>alert('data berhasil dihapus')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    } else {
        echo "<script>alert('data gagal dihapus')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    }
}

// ubah buku
if (isset($_GET['ubah_data'])) {
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];

    if (!empty($gambar)) {
        $ambil_data = mysqli_query($koneksi, "SELECT *FROM buku WHERE kode_buku='$_GET[ubah_data]'");
        $data = mysqli_fetch_array($ambil_data);

        if (file_exists("gambar/" . $gambar)) {
            echo "<script>alert('gambar sudah ada! silahkan rename file anda jika ingin menggunakan file tersebut')</script>";
        } else {

            unlink("gambar/" . $data['foto']);

            $ubah_data = mysqli_query($koneksi, "UPDATE buku SET kode_buku='$kode',judul_buku='$judul',pengarang='$pengarang',
        penerbit='$penerbit',kategori='$kategori',jumlah='$jumlah',foto='$gambar'");



            if ($ubah_data) {
                move_uploaded_file($lokasi_gambar, "gambar/" . $gambar);
                echo "<script>alert('data berhasil diedit')</script>";
                echo "<script>location='media.php?halaman=data_buku'</script>";
            }
        }
    } else {
        $ubah_data = mysqli_query($koneksi, "UPDATE buku SET kode_buku='$kode',judul_buku='$judul',pengarang='$pengarang',
        penerbit='$penerbit',kategori='$kategori',jumlah='$jumlah'");
        if ($ubah_data) {
            echo "<script>alert('data berhasil diedit')</script>";
            echo "<script>location='media.php?halaman=data_buku'</script>";
        }
    }
}

if (isset($_POST['simpan_kategori'])) {

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];

    $simpan_data = mysqli_query($koneksi, "INSERT INTO kategori(kode_kategori,nama_kategori) VALUES('$kode','$nama')");
    echo "<script>alert('data berhasil disimpan')</script>";
    echo "<script>location='media.php?halaman=data_kategori'</script>";
}

if (isset($_POST['simpan_pengarang'])) {

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];

    $simpan_data = mysqli_query($koneksi, "INSERT INTO pengarang(kode_pengarang,nama_pengarang) VALUES('$kode','$nama')");
    echo "<script>alert('data berhasil disimpan')</script>";
    echo "<script>location='media.php?halaman=data_pengarang'</script>";
}
if (isset($_POST['simpan_penerbit'])) {

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];

    $simpan_data = mysqli_query($koneksi, "INSERT INTO penerbit(kode_penerbit,nama_penerbit) VALUES('$kode','$nama')");
if($simpan_data){
    echo "<script>alert('data berhasil disimpan')</script>";
    echo "<script>location='media.php?halaman=data_penerbit'</script>";
}else{
    echo "<script>alert('data gagal disimpan')</script>";
    echo "<script>location='media.php?halaman=data_penerbit'</script>";
}
}

// Crud Pengguna 
// Tambah data
if (isset($_POST['simpan_pengguna'])) {

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $nmr = $_POST['nmr'];
    $level = $_POST['level'];
    $password = $_POST['psw'];
    $gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];

    $simpan_data = mysqli_query($koneksi, "INSERT INTO pengguna(nama_pengguna,nim,alamat,no_hp,level,password,image) 
    VALUES('$nama','$nim','$alamat','$nmr','$level','$password','$gambar')");
    if ($simpan_data) {
        move_uploaded_file($lokasi_gambar, "gambar/" . $gambar);
        echo "<script>alert('data berhasil disimpan')</script>";
        echo "<script>location='media.php?halaman=data_pengguna'</script>";
    } else {
        echo "<script>alert('data gagal disimpan')</script>";
        echo "<script>location='media.php?halaman=data_pengguna'</script>";
    }
}


// Hapus Data pengguna
if (isset($_GET['hapus_pengguna'])) {

    // $ambil_data =mysqli_query($ko)
    $delete_pengguna = mysqli_query($koneksi, "DELETE FROM pengguna WHERE  id_pengguna='$_GET[hapus_pengguna]'");
    if ($delete_pengguna) {
        echo "<script>alert('data berhasil dihapus')</script>";
        echo "<script>location='media.php?halaman=data_pengguna'</script>";
    } else {
        echo "<script>alert('data gagal dihapus')</script>";
        echo "<script>location='media.php?halaman=data_pengguna'</script>";
    }
}

// Ubah data pengguna
if (isset($_GET['ubah_pengguna'])) {
    echo"berhasil";

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $nmr = $_POST['nmr'];
    $level = $_POST['level'];
    $password = $_POST['psw'];
    $gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];

    if (!empty($gambar)) {
        $ambil_data = mysqli_query($koneksi, "SELECT *FROM pengguna WHERE nama_pengguna='$_GET[ubah_pengguna]'");
        $data = mysqli_fetch_array($ambil_data);

        if (file_exists("gambar/" . $gambar)) {
            echo "<script>alert('gambar sudah ada! silahkan rename file anda jika ingin menggunakan file tersebut')</script>";
        } else {

            unlink("gambar/" . $data['image']);

            $ubag_pengguna = mysqli_query($koneksi, "INSERT INTO pengguna(nama_pengguna,nim,alamat,no_hp,level,password,image) 
            VALUES('$nama','$nim','$alamat','$nmr','$level','$password','$gambar')");



            if ($ubah_data) {
                move_uploaded_file($lokasi_gambar, "gambar/" . $gambar);
                echo "<script>alert('data berhasil diedit')</script>";
                echo "<script>location='media.php?halaman=data_pengguna'</script>";
            }
        }
    } else {
        $ubah_pengguna = mysqli_query($koneksi, "INSERT INTO pengguna(nama_pengguna,nim,alamat,no_hp,level,password,image) 
        VALUES('$nama','$nim','$alamat','$nmr','$level','$password','$gambar')");
        if ($ubah_pengguna) {
            echo "<script>alert('data berhasil diedit')</script>";
            echo "<script>location='media.php?halaman=data_pengguna'</script>";
        }
    }
}

// login
// if (isset($_POST['nim'])) // untuk menangkap nim saja
if (isset($_POST['login'])){

    include "koneksi.php";

    $login = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE nim='$_POST[nim]' AND password='$_POST[password]'");
    $jumlah = mysqli_num_rows($login); //untuk menentukan jumlah data

    if ($jumlah > 0) { //untuk mengecek apakah username dan password yang diinputkan bener atau salah

        $data = mysqli_fetch_array($login);
        session_start();
        $_SESSION['nama'] = $data['nama_pengguna'];
        $_SESSION['level'] = $data['level'];

        echo "<script>alert('data berhasil')</script>";
        echo "<script>location='media.php'</script>";
    }else {
        echo "<script>alert('data gagal')</script>";
        echo "<script>location='index.php'</script>";
    }
}

// logout
if(isset($_GET['aksi_logout'])){
    session_start();//membuka session
    session_destroy(); //menghapus session yang ada
    echo "<script>alert('data berhasil dihapus')</script>";
    echo "<script>location='index.php'</script>";
}