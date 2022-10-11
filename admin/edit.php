<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_valid'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_valid = $_GET['id_valid'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM valid WHERE id_valid='$id_valid'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Nama_personil	= $_POST['id_valid'];
			$Nama_personil	= $_POST['Nama_personil'];
			$Bersangkutan	= $_POST['Bersangkutan'];
			$Tempat			= $_POST['Tempat'];
			$Isi_kegiatan	= $_POST['Isi_kegiatan'];
			$Hasil			= $_POST['Hasil'];


			$sql = mysqli_query($koneksi, "UPDATE valid SET Nama_personil='$Nama_personil', Bersangkutan='$Bersangkutan', Tempat='$Tempat', Isi_kegiatan='$Isi_kegiatan', Hasil ='$Hasil' WHERE id_valid='$id_valid'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_mhs";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit&id_valid=<?php echo $id_valid; ?>" method="post">
			
			<div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Personil</label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" name="Nama_personil" class="form-control" size="4" value="<?php echo $data['Nama_personil']; ?>"required>
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Bersangkutan</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" name="Bersangkutan" class="form-control" value="<?php echo $data['Bersangkutan']; ?>"required>
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" name="Tempat" class="form-control" value="<?php echo $data['Tempat']; ?>"required>
        </div>
      </div>
      <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Isi Kegiatan</label>
                  <div class="col-md-6 col-sm-6">
                  <textarea class="form-control" name="Isi_kegiatan" rows="4"><?php echo $data['Isi_kegiatan'] ?></textarea>
              </div>
              </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Hasil yang Dicapai</label>
                  <div class="col-md-6 col-sm-6">
									<textarea class="form-control" name="Hasil"  rows="4"><?php echo $data['Hasil'] ?></textarea>
              </div>
                </div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
