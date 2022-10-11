<?php 
  
  include('db_connect.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM problem WHERE id_lapor = $id LIMIT 1";

  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Edit Data
            </div>
            <div class="card-body">
              <form action="edit.php" method="POST">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="Nama" value="<?php echo $row['Nama'] ?>" placeholder="Masukkan Nama Anda" class="form-control">
                  <input type="hidden" name="id_lapor" value="<?php echo $row['id_lapor'] ?>">
                </div>

                <div class="form-group">
                  <label>Umur</label>
                  <input type="text" name="Umur" value="<?php echo $row['Umur'] ?>" placeholder="Masukkan Umur anda" class="form-control">
                </div>

              <div class="form-group">
              <label >Agama</label>
             <div>
                <select name="Agama" class="form-control" required>
                  <option value="">Pilih Program Studi</option>
                  <option value="Islam" <?php if($row['Agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                  <option value="Katolik" <?php if($row['Agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option>
                  <option value="Protestan" <?php if($row['Agama'] == 'Protestan'){ echo 'selected'; } ?>>Protestan</option>
                  <option value="Hindu" <?php if($row['Agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                  <option value="Budha" <?php if($row['Agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
                  <option value="Konghucu" <?php if($row['Agama'] == 'Konghucu'){ echo 'selected'; } ?>>Konghucu</option>
          </select>
        </div>
      </div>

                <div class="form-group">
                  <label>Isi Pengaduan</label>
                  <textarea class="form-control" name="Isi_pengaduan" placeholder="Isi Pengaduan" rows="4"><?php echo $row['Isi_pengaduan'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>