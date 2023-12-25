<?php

require_once 'models/M_barang.php';
// echo "Selamat datang";
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$tgl = date('Y-m-d');

$save = new M_barang();
$result = $save->saveBarang($nama, $jumlah, $tgl);
if($result) {
    session_start();
    $_SESSION['message'] = "Data berhasil ditambahkan";
    $_SESSION['status'] = 1;
    header('location:/stok.php');
} else {
    $_SESSION['message'] = "Data gagal ditambahkan";
    $_SESSION['status'] = 0;
    header('location:/stok.php');
}
