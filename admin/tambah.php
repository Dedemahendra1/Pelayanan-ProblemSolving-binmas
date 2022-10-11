<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Nama_personil			= $_POST['Nama_personil'];
			$Bersangkutan			= $_POST['Bersangkutan'];
			$Tempat	= $_POST['Tempat'];
			$Isi_kegiatan		= $_POST['Isi_kegiatan'];
			$Hasil 				= $_POST['Hasil'];

			$cek = mysqli_query($koneksi, "SELECT * FROM valid WHERE id_valid='$id_valid'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO valid (id_valid,Nama_personil, Bersangkutan, Tempat,Isi_kegiatan,Hasil) VALUES('$id_valid','$Nama_personil', '$Bersangkutan', '$Tempat', '$Isi_kegiatan', '$Hasil')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
			}
		}
		?>

		<form action="index.php?page=tambah_mhs" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Personil</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Nama_personil" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Bersangkutan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Bersangkutan" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tempat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Isi Kegiatan</label>
                  <div class="col-md-6 col-sm-6">
                  <textarea class="form-control" name="Isi_kegiatan"  rows="4"></textarea>
              </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Hasil yang Dicapai</label>
                  <div class="col-md-6 col-sm-6">
                  <textarea class="form-control" name="Hasil"   rows="4"></textarea>
              </div>
                </div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
