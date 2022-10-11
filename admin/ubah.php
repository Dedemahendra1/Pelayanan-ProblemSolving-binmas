<?php 
  
  include('../db_connect.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tanggap WHERE id_tanggap = $id LIMIT 1";

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
              <form action="proses_edit.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Pelapor</label>
                  <input type="text" name="Nama_pelapor" value="<?php echo $row['Nama_pelapor'] ?>" placeholder="Masukkan Nama Anda" class="form-control">
                  <input type="hidden" name="id_tanggap" value="<?php echo $row['id_tanggap'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="Alamat" value="<?php echo $row['Alamat'] ?>" placeholder="Masukkan Alamat anda" class="form-control">
                </div>

              <div class="form-group">
              <label >Keterangan</label>
             <div>
                <select name="Keterangan" class="form-control" required>
                  <option value="">Keterangan</option>
                  <option value="Diterima" <?php if($row['Keterangan'] == 'Diterima'){ echo 'selected'; } ?>>Diterima</option>
                  <option value="Dilaksanakan" <?php if($row['Keterangan'] == 'Dilaksanakan'){ echo 'selected'; } ?>>Dilaksanakan</option>
                  <option value="Selesai" <?php if($row['Keterangan'] == 'Selesai'){ echo 'selected'; } ?>>Selesai</option>
          </select>
        </div>
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