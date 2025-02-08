<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar PPDB MUSAMU</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="upload/situs/logo.png" rel="icon">
  <link href="upload/situs/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main1.css" rel="stylesheet">

</head>
<style>
   hr{
    border:solid 1px blue;}
  table, th,tr, td{
    border:solid 1px black;
  }
  b{
    margin-left:10px;
  }
</style>
<body class="blog-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="upload/situs/logo.png" alt="">
        <h1 class="sitename">PPDB Musamu</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Beranda<br></a></li>
          <li><a href="index.php#about">Tentang</a></li>
          <li><a href="index.php#values">Jadwal</a></li>
          <li><a href="index.php#services">Layanan</a></li>
          <li><a href="index.php#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="daftar.php">Daftar PPDB</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="daftar.php">Daftar PPDB</a></li>
            <li class="current">Formulir</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <!-- Comment Form Section -->
          <section id="comment-form" class="comment-form section">
            <div class="container">

              <?php
              
              require_once 'dbcon.php';
              $id_siswa =$_GET['id_siswa'];
              $query = $conn->query("SELECT * FROM siswa where id_siswa='$id_siswa'");
              $row = $query->fetch_array();
              ?>
              <a href="javascript:void(0);" class="btn btn-primary" style="float: right;" onclick="printNota();">Print Nota</a>
              <script>
              function printNota() {
                  var printWindow = window.open('print_formulir.php?id_siswa=<?php echo $id_siswa?>', '_blank');
                  printWindow.onload = function() {
                      printWindow.print();
                      
                      // Check for print dialog closure and close the window
                      printWindow.onafterprint = function() {
                          printWindow.close();
                      };
                  };
              }
              </script>
              <h3 class="text-center">Formulir PPDB</h3>
              <hr>
              <div class="table-responsive">
              <table width="100%">
                <tr>
                  <td colspan="2"><h4><b>A. IDENTITAS DIRI</b></h4></td>
                </tr>
                <tr>
                  <td rowspan="6" style="width:30%;"><img src="upload/data_siswa/foto/<?php echo $row['foto']?>" style="width:100%;"></td>
                  <td><b>No Daftar :</b><?php echo $row['id_siswa'];?></td>
                </tr>
                <tr><td><b>Kelas :</b><?php echo $row['kelas'];?></td>
                </tr>
                <tr>
                  <td><b>NIK :</b><?php echo $row['nik'];?></td>
                </tr>
                <tr>
                  <td><b>Nama :</b><?php echo $row['nama'];?></td>
                </tr>
                <tr>
                  <td><b>Tempat, Tanggal Lahir :</b><?php echo $row['tempat_lahir'].', '.$row['tgl_lahir'];?></td>
                </tr>
                <tr>
                  <td><b>Jenis kelamin :</b><?php echo $row['jns_kelamin'];?></td>
                </tr>
                </table>
                <table width="100%">
                <tr>
                  <td style="width:50%;"><b>Hubungan Keluarga :</b><?php echo $row['hub_keluarga'];?></td>
                  <td><b>Asal sekolah :</b><?php echo $row['asal'];?></td>
                </tr>
                <tr>
                  <td><b>No Kartu Keluarga :</b><?php echo $row['no_kk'];?></td>
                  <td><b>No NISN :</b><?php echo $row['no_kk'];?></td>
                </tr>
                <tr>
                  <td><b>Tahun Lulus :</b><?php echo $row['tahun'];?></td>
                  <td><b>Agama :</b><?php echo $row['agama'];?></td>
                </tr>
                <tr>
                  <td colspan="2"><b>Alamat :</b><br><div style="margin-left:10px;"><?php echo $row['alamat_siswa'];?></div></td>
                </tr>
                <tr>
                  <td colspan="2"><h4><b>B. IDENTITAS ORANG TUA/WALI</b></h4></td>
                </tr>
                <tr>
                  <td><b>Nama Ayah :</b><?php echo $row['nm_ayah'];?></td>
                  <td><b>Nama Ibu :</b><?php echo $row['nm_ibu'];?></td>
                </tr>
                <tr>
                  <td><b>Nama Wali :</b><?php echo $row['nm_wali'];?></td>
                  <td><b>No Whatsapp :</b>0<?php echo $row['no_wa'];?></td>
                </tr>
                <tr>
                  <td colspan="2"><b>Alamat Orang tua/Wali:</b><br><div style="margin-left:10px;"><?php echo $row['alamat_wali'];?></div></td>
                </tr>
              </table>
              </div>
            </div>
          </section><!-- /Comment Form Section -->

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">PPDB MUSAMU</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Ngadiretno, Tamanagung, Kec. Muntilan, Kabupaten Magelang, Jawa Tengah 56413</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php#hero">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php#about">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php#services">Layanan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="daftar.php">Daftar PPDB</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Kami</h4>
          <p>Ikuti semua sosial media kami</p>
          <div class="social-links d-flex">
            <a href="https://www.tiktok.com/@mtsmuh1muntilan"><i class="bi bi-tiktok"></i></a>
            <a href="https://web.facebook.com/mtsngadiretno/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/mtsmuh1muntilan/"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCm0nTvOiBzBYpTy7x3aOPfA"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

      </div>
      </div>
    </div>

    <div class="container copyright text-center">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Musamu</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="#">Gizw</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    
  </script>

</body>

</html>