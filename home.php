    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:login.php?pesan=gagal");
    }
 
    ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link href="admin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
 <link rel="stylesheet" href="styles.css">
 
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="home.php" class="navbar-brand">HOME</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="home.php" class="nav-link text-light">Home</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link text-light" >Profil</a>
            </li>
            <li class="nav-item">
                <a href="problem.php" class="nav-link text-light">Problem Solving</a>
            </li>
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>

<header>
 <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
    <img src="img/wiwi.jpg">
  </div>
</header>
 
    <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Bhabinkamtibmas.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/polri.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                   <h4 class="subheading">Visi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Terwujudnya Pelayan Kamtibmas yang unggul, terjalinya kemitraan polri dengan masyarakat, Penegakkan hukum yang efektif serta sinergi polisisonal yang proaktif dalam rangka memantapkan keamanan di wilayah Medan barat</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/polri.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Misi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Mewujudkan Pelayanan Kamtibmas yang prima dengan kegiatan pre-emetif, preventif dan represif(penegak hukum) melalui penerapan ilmu pengetahuan dan teknologi guna mewujudkan keamanan dan ketertiban masyrakat</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/polri.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Misi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Memberikan perlindungan, pengayoman, pelayanan dan bimbingan masyarakat dengan meningkatkan peran Bhabinkamtibmas dalam mengimplementasikan strategi Polmas yang berada di desa/kelurahan .</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/polri.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Misi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Menyusun SOP (Standar Operasional Prosedur) di masing-masing satuan fungsi sebagai pedoman dalam melaksanakan tugas.</p></div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </section>
</body>
<footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Contact Us: (061) 6614776</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                </div>
                <div>
                  <h3 class="margin-bottom-0">Alamat</h3>
                  <p>Jl. Budi Pembangunan II, Pulo Brayan Kota,Kec.Medan Barat,Kota Medan <br>
                     
                  </p>               
                </div>
               
                
                <div class="float-left">
                </div>
                <div>
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>(061) 6614776<br>
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Bhabinkamtibmas</p>
          
        </div>
       
      </section>
    </footer>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>