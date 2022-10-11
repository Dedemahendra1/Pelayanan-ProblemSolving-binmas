<center><font size="6">Tanggapan</font></center>
    <hr>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Input Data
            </div>
            <div class="card-body">
              <a href="index.php?page=Tambah_tanggap" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH</a>

              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Pelapor</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../db_connect.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM tanggap");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['Tanggal'] ?></td>
                      <td><?php echo $row['Nama_pelapor'] ?></td>
                      <td><?php echo $row['Alamat'] ?></td>
                      <td><?php echo $row['Keterangan']?></td>
                      <td class="text-center">
                        <a href="ubah.php?id=<?php echo $row['id_tanggap'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id_tanggap'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>