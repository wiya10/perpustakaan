<?php
// if (isset($_GET['page'])) {

//     $page = $_GET['page'];

//     if (file_exists("$page.php")) {
//         include "$page.php";
//     } else {
//         echo "halaman tidak ditemukan";
//     }
// }


if (isset($_GET['halaman'])) {

    $oke = $_GET['halaman'];
    if (file_exists("$oke.php")) {
        include "$oke.php";
    } else {
        echo "halaman tidak ditemukan";
    }
} else {
    include "beranda.php";
}
