<?php

require_once 'models/M_barang.php';
$id = $_GET['id'];
$model = new M_barang();
if($model->deleteBarang($id)) {
    session_start();
    $_SESSION['message'] = "Data berhasil dihapus";
    $_SESSION['status'] = 1;
    header('location:/stok.php');
} else {
    $_SESSION['message'] = "Data gagal dihapus";
    $_SESSION['status'] = 0;
    header('location:/stok.php');
}
