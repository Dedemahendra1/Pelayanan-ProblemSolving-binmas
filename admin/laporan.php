<?php
//memasukkan file config.php
include('config.php');
?>
 <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  
      <!-- Font Awesome -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  
  <div class="container" style="margin-top:20px">
    <img align = "left" src=" assets/images/kop.png"></img>
    <br>
    <center ><img src="assets/images/head.png"></center>
    <hr>
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
   <br>
      <div>
      <img align = "right"src="assets/images/ttd.png">
      </div>
      </br>
</tbody>

<script>
      window.print()
  </script>