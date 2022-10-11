<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Validasi</font></center>
		<hr>
		<a href="index.php?page=tambah_mhs"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Nama Personil</th>
					<th>Nama Bersangkutan</th>
					<th>Tempat</th>
					<th>Isi Kegiatan</th>
					<th>Hasil yang Dicapai</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM valid ORDER BY id_valid DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['Nama_personil'].'</td>
							<td>'.$data['Bersangkutan'].'</td>
							<td>'.$data['Tempat'].'</td>
							<td>'.$data['Isi_kegiatan'].'</td>
							<td>'.$data['Hasil'].'</td>
							<td>'.$data['Tanggal'].'</td>
							<td>
								<a href="index.php?page=edit&id_valid='.$data['id_valid'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?id_valid='.$data['id_valid'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
