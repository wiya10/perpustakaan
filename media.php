<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">SISTEM INFORMASI PERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            <?php  session_start(); ?>
                <form class="d-flex" role="search">
                    <li style="list-style-type: none; margin-top:5px; color: white; margin-right: 20px">
                    <span>
                        <?php echo  $_SESSION['nama'] ?> 
                        (<?php echo $_SESSION['level'] ?>)
                    </span>
                    </li>
                    <a href="crud.php?aksi_logout" 
                    style="background-color: red; text-decoration: none; color: white; padding: 7px 20px; font-size: 12px;font-weight:bold;">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- menu -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-3">

                <?php if(isset($_SESSION['level'])){
                    if($_SESSION['level']=="admin"){
                ?>
                    <!-- echo "admin" ?> -->

                    <div class="card mb-3">
                        <div class="card-header bg-success text-white">
                            Data Master
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="media.php" style="text-decoration: none;color: black;">Beranda</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_buku" style="text-decoration: none;color: black;">Data Buku</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_kategori" style="text-decoration: none;color: black;">Kategori</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_pengarang" style="text-decoration: none;color: black;">Pengarang</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_penerbit" style="text-decoration: none;color: black;">Penerbit</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_pengguna" style="text-decoration: none;color: black;">Pengguna</a></li>
                        </ul>
                    </div>
                
                    <?php  }elseif($_SESSION['level']=="user"){ ?>
                        <!-- echo "mahasiswa"  -->
                        <div class="card mb-3">
                        <div class="card-header bg-success text-white">
                            Menu
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="media.php" style="text-decoration: none;color: black;">Beranda</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_buku" style="text-decoration: none;color: black;">Data Buku</a></li>
                            <li class="list-group-item"><a href="media.php?halaman=data_kategori" style="text-decoration: none;color: black;">peminjaman</a></li>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php } ?>
                        
            </div>
            <div class="col-md-9">
                <?php include "konten.php" ?>
            </div>
        </div>
    </div>
    <!-- end menu -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>