<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Input Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Input Data
            </div>
            <div class="card-body">
              <a href="add_modal.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <a href="tanggap.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TANGGAPAN</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Isi Pengaduan</th>
                     <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('db_connect.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM problem");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['Nama'] ?></td>
                      <td><?php echo $row['Umur'] ?></td>
                      <td><?php echo $row['Agama'] ?></td>
                      <td><?php echo $row['Isi_pengaduan']?></td>
                      <td><?php echo $row['Tanggal']?></td>
                      <td class="text-center">
                        <a href="button.php?id=<?php echo $row['id_lapor'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="delete.php?id=<?php echo $row['id_lapor'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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