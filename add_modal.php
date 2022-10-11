<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="addnew.php" method="POST">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="Nama" placeholder="Masukkan Nama Anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>Umur</label>
                  <input type="text" name="Umur" placeholder="Masukkan Umur Anda" class="form-control">
                </div>

                <div class="form-group">
                <label >Agama</label>
                <div >
                <select name="Agama" class="form-control" required>
                   <option value="">Agama</option>
                   <option value="Islam">Islam</option>
                   <option value="Katolik">Katolik</option>
                   <option value="Protestan">Protestan</option>
                   <option value="Hindu">Hindu</option>
                   <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
          </select>
        </div>
                
                 <div class="form-group">
                  <label>Isi Pengaduan</label>
                  <textarea class="form-control" name="Isi_pengaduan" placeholder="Isi Pengaduan Anda" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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