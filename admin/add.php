<center><font size="6">Tanggapan</font></center>
    <hr>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH
            </div>
            <div class="card-body">
              <form action="new.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Pelapor</label>
                  <input type="text" name="Nama_pelapor"  class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="Alamat"  class="form-control">
                </div>

                <div class="form-group">
                <label >Keterangan</label>
                <div >
                <select name="Keterangan" class="form-control" required>
                   <option value="">Keterangan</option>
                   <option value="Diterima">Diterima</option>
                   <option value="Dilaksanakan">Dilaksanakan</option>
                   <option value="Selesai">Selesai</option>
          </select>
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