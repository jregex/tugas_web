<?php require_once("layouts/header.php") ?>
<?php
require_once "models/M_barang.php";
$id = $_GET['id'];
$model = new M_barang();
$barang = $model->getBarangbyid($id);
?>
<div class="card">
	<div class="card-header bg-dark text-white">
		<h5>Edit Stok</h5>
	</div>
	<div class="card-body">
		<form action="update_stok.php" method="POST">
            <input type="hidden" name="id_barang" value="<?= $id ?>">
			<div class="mb-3">
				<label for="nama_barang" class="form-label">Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" id="nama_barang"
					value="<?= $barang['nama_barang'] ?>">
			</div>
			<div class="mb-3">
				<label for="jumlah" class="form-label">Jumlah</label>
				<input type="number" name="jumlah" class="form-control" id="jumlah"
					value="<?= $barang['jumlah'] ?>">
			</div>
			<div class="mb-3">
				<label for="tgl" class="form-label">Tanggal masuk</label>
				<input type="date" name="tgl" class="form-control" id="tgl"
					value="<?= date('Y-m-d', strtotime($barang['tgl_masuk'])) ?>">
			</div>
			<button type="submit" class="btn btn-success">Update</button>
			<a href="/stok.php" class="btn btn-danger">Kembali</a>
		</form>
	</div>
</div>

<?php require_once("layouts/footer.php") ?>
