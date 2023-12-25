<?php

require_once "models/M_barang.php";
$id = $_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$tgl=$_POST['tgl'];

$model=new M_barang();
if($model->updateBarang($id,$nama_barang,$jumlah,$tgl)) {
    session_start();
    $_SESSION['message'] = "Data berhasil diupdate";
    $_SESSION['status'] = 1;
    header('location:/stok.php');
} else {
    $_SESSION['message'] = "Data gagal diupdate";
    $_SESSION['status'] = 0;
    header('location:/stok.php');
}
