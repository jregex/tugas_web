<?php include("layouts/header.php") ?>
<?php
require_once "models/M_barang.php";
$data = new M_barang();
?>
<div class="col">
	<?php
        session_start();
if($_SESSION['status'] == 1):
    ?>
	<h5 class="text-success fw-bold">
		<?= $_SESSION['message']; ?>
	</h5>
	<?php
elseif($_SESSION['status'] == 0):
    ?>
	<h5 class="text-danger fw-bold">
		<?= $_SESSION['message']; ?>
	</h5>
	<?php
endif;
unset($_SESSION['status']);
unset($_SESSION['message']);
?>
	<div class="mb-3">
		<a href="/tambah_stok.php" class="btn btn-success">Tambah data</a>
	</div>
	<div class="card">
		<div class="card-header bg-dark text-white">
			Stok barang
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Tgl Masuk</th>
					<th>#</th>
				</thead>
				<tbody>
					<?php
$no = 1;
foreach ($data->getBarang() as $value) :
    ?>
					<tr>
						<td><?= $no++ ?>
						</td>
						<td><?= $value['nama_barang'] ?>
						</td>
						<td><?= $value['jumlah'] ?>
						</td>
						<td><?= date('d/m/Y', strtotime($value['tgl_masuk'])) ?>
						</td>
						<td>
							<a href="/delete_stok.php?id=<?= $value['id_barang'] ?>"
								class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</a> | <a
								href="edit_stok.php?id=<?= $value['id_barang'] ?>"
								class="btn btn-sm btn-warning">Edit</a>
						</td>
					</tr>

					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

<?php include("layouts/footer.php") ?>
