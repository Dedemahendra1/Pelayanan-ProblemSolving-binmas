<center><font size="6">Tambah Data</font></center>
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
              <a href="index.php?page=tambah_data" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
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
                      include('../db_connect.php');
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
                        <a href="delete1.php?id=<?php echo $row['id_lapor'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
            <?php 
        $batas = 10;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
 
        $previous = $halaman - 1;
        $next = $halaman + 1;
        
        $data = mysqli_query($con,"select * from problem");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);
 
        $data_problem = mysqli_query($con,"select * from problem limit $halaman_awal, $batas");
        $nomor = $halaman_awal+1;
        while($d = mysqli_fetch_array($data_problem)){
          ?>
          <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $d['problem_Nama']; ?></td>
            <td><?php echo $d['problem_Umur']; ?></td>
            <td><?php echo $d['problem_Pekerjaan']; ?></td>
            <td><?php echo $d['problem_Isi_pengaduan']; ?></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
        </li>
        <?php 
        for($x=1;$x<=$total_halaman;$x++){
          ?> 
          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
          <?php
        }
        ?>        
        <li class="page-item">
          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
      </ul>
    </nav>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>