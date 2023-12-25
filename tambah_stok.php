<?php require_once("layouts/header.php") ?>
<div class="card">
	<div class="card-header bg-dark text-white">
		<h5>Tambah Stok</h5>
	</div>
	<div class="card-body">
		<form action="save_stok.php" method="POST">
			<div class="mb-3">
				<label for="nama_barang" class="form-label">Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" id="nama_barang">
			</div>
			<div class="mb-3">
				<label for="jumlah" class="form-label">Jumlah</label>
				<input type="number" name="jumlah" class="form-control" id="jumlah">
			</div>
			<button type="submit" class="btn btn-success">Tambah</button>
			<a href="/stok.php" class="btn btn-danger">Kembali</a>
		</form>
	</div>
</div>

<?php require_once("layouts/footer.php") ?>
