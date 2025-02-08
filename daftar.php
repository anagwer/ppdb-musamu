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
            <li class="current">Daftar PPDB</li>
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

              <form method="post" enctype="multipart/form-data" onsubmit="return confirmSubmission()">

                <h2 class="text-center"><b>Form Pendaftaran Calon Peserta Didik Baru</b></h2><hr>
                <p style="color:red;">* Isilah form berikut dengan teliti</p>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="form-label">Pilih Kelas</label>
                    <select name="kelas" class="form-select" required>
                      <option>Reguler</option>
                      <option>Boarding</option>
                    </select>
                  </div>
                </div>
                <p><b>A. IDENTITAS SISWA</b></p>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label class="form-label">NIK/KIA Siswa</label>
                    <input name="nik" type="text"  pattern="\d{16}" class="form-control" placeholder="Masukkan NIK" required>
                    <div style="font-size:12px;color:red;">*) Nomor NIK 16 Digit</div>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
                    <div style="font-size:12px;color:red;">*) Sesuai Akta Kelahiran</div>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukkan Tempat Lahir" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" placeholder="Masukkan NIK" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jns_kelamin" class="form-select" required>
                      <option>Perempuan</option>
                      <option>Laki-laki</option>
                    </select>
                  </div>
                  
                  <div class="col-md-6 form-group">
                    <label class="form-label">Hubungan Keluarga</label>
                    <select name="hub_keluarga" class="form-select" required>
                      <option>Anak Kandung</option>
                      <option>Cucu</option>
                      <option>Keluarga Lain</option>
                      <option>Panti Asuhan</option>
                      <option>Lainnya</option>
                    </select>
                  </div>

                  <div class="col-md-6 form-group">
                    <label class="form-label">Asal Sekolah</label>
                    <input name="asal" type="text" class="form-control" placeholder="Masukkan Asal Sekolah" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                    <label class="form-label">Nomor Kartu Keluarga</label>
                    <input name="no_kk" type="text" pattern="\d{16}" class="form-control" placeholder="Masukkan No KK" required>
                    <div style="font-size:12px;color:red;">*) Nomor Kartu Keluarga 16 Digit</div>
                  </div>

                  <div class="col-md-6 form-group">
                    <label class="form-label">Nomor NISN</label>
                    <input name="no_nisn" type="text" class="form-control" minlength="10" placeholder="Masukkan NISN" required>
                    <div style="font-size:12px;color:red;">*) Nomor NISN 10 Digit</div>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Tahun Lulus</label>
                    <input name="tahun" type="text" class="form-control" minlength="4" maxlength="4" placeholder="Masukkan Tahun Lulus" required>
                  </div>
                  
                  <div class="col-md-6 form-group">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-select" required>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Khatolik</option>
                      <option>Budha</option>
                      <option>Hindu</option>
                      <option>Konghuchu</option>
                    </select>
                  </div>
                  
                  <div class="col-md-6 form-group">
                    <label class="form-label">Alamat Domisili Siswa</label>
                    <input name="alamat_siswa" type="text" class="form-control" placeholder="Masukkan Alamat" required>
                  </div>

                  <hr>
                  <p><b>B. IDENTITAS ORANG TUA WALI</b></p>

                  <div class="col-md-6 form-group">
                    <label class="form-label">Nama Ayah</label>
                    <input name="nm_ayah" type="text" class="form-control" placeholder="Masukkan Nama Ayah" >
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Nama Ibu</label>
                    <input name="nm_ibu" type="text" class="form-control" placeholder="Masukkan Nama Ibu" >
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Nama Wali (jika dengan wali)</label>
                    <input name="nm_wali" type="text" class="form-control" placeholder="Masukkan Nama Wali" >
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">No Whatsapp Aktif</label>
                    <input name="no_wa" type="number" class="form-control" placeholder="Masukkan No Whatsapp Aktif" required>
                    <div style="font-size:12px;color:red;">*) Contoh: 089xxxxxxxxxxx</div>
                  </div>

                  <div class="col-md-6 form-group">
                    <label class="form-label">Alamat Domisili Orang Tua/Wali</label>
                    <input name="alamat_wali" type="text" class="form-control" placeholder="Masukkan Alamat" required>
                  </div>

                  <div class="col-md-6 form-group">
                    <label class="form-label">Mendapat Info MUSAMU Dari</label>
                    <select name="info" class="form-select" required>
                      <option>Sosial Media</option>
                      <option>Baliho</option>
                      <option>Browser</option>
                      <option>Sekolah SD</option>
                      <option>Saudara</option>
                      <option>Teman</option>
                      <option>Alumni</option>
                    </select>
                  </div>
                  
                  <hr>
                  <p><b>C. UPLOAD Foto Diri Formal (Gambar)</b></p>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Pas Foto (3X4)</label>
                    <input type="file" class="form-control" name="foto" required>
                    <div style="font-size:12px;color:red;">*) Contoh nama file: foto_asep</div>
                  </div>
                  <hr>
                  <p><b>D. UPLOAD BERKAS (PDF)</b></p>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Kartu Keluarga</label>
                    <input type="file" class="form-control" name="kk" required>
                    <div style="font-size:12px;color:red;">*) Contoh nama file: kk_asep</div>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Ijazah Terakhir/SKHUN</label>
                    <input type="file" class="form-control" name="ijazah" required>
                    <div style="font-size:12px;color:red;">*) Contoh nama file: ijazah_asep</div>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="form-label">Akta Kelahiran</label>
                    <input type="file" class="form-control" name="akta" required>
                    <div style="font-size:12px;color:red;">*) Contoh nama file: akta_asep</div>
                  </div>

                  <div class="col-md-6 form-group">
                    <label class="form-label">KIP/PIP (Jika ada)</label>
                    <input type="file" class="form-control" name="kip">
                    <div style="font-size:12px;color:red;">*) Contoh nama file: kip_asep</div>
                  </div>

                </div>
                <script>
                    function confirmSubmission() {
                        const userConfirmation = confirm("Apakah Anda yakin ingin menyimpan data ini?");
                        return userConfirmation; // Jika "Ya" dipilih, return true, submit dilanjutkan. Jika "Tidak", return false, submit dibatalkan.
                    }
                </script>

                <div class="text-center">
                  <button type="submit" name="save" class="btn btn-primary">
                    <i class="bi bi-floppy"></i> Submit Form Pendaftaran
                  </button>
                </div>

              </form>
              

              <?php 
              require_once 'dbcon.php';

              if (isset($_POST['save'])) {
                  $kelas = $_POST['kelas'];
                  $nik = $_POST['nik'];
                  $nama = $_POST['nama'];
                  $tempat_lahir = $_POST['tempat_lahir'];
                  $tgl_lahir = $_POST['tgl_lahir'];
                  $jns_kelamin = $_POST['jns_kelamin'];
                  $hub_keluarga = $_POST['hub_keluarga'];
                  $asal = $_POST['asal'];
                  $no_kk = $_POST['no_kk'];
                  $no_nisn = $_POST['no_nisn'];
                  $tahun = $_POST['tahun'];
                  $agama = $_POST['agama'];
                  $alamat_siswa = $_POST['alamat_siswa'];
                  $nm_ayah = $_POST['nm_ayah'];
                  $nm_ibu = $_POST['nm_ibu'];
                  $nm_wali = $_POST['nm_wali'];
                  $no_wa = $_POST['no_wa'];
                  $alamat_wali = $_POST['alamat_wali'];
                  $info = $_POST['info'];
                  
                  // Fungsi untuk memeriksa apakah file PDF
                  function isPDF($filename) {
                    return strtolower(pathinfo($filename, PATHINFO_EXTENSION)) === 'pdf';
                  }
                  function isIMG($filename) {
                    return strtolower(pathinfo($filename, PATHINFO_EXTENSION)) === 'jpg';
                  }

                  // Validasi dan proses upload untuk setiap file
                  $uploads = [
                    'kk' => 'kk',
                    'ijazah' => 'ijazah',
                    'akta' => 'akta',
                    'foto' => 'foto',
                    'kip' => 'kip'
                  ];
                  $i=1;
                  foreach ($uploads as $field => $label) {
                        $file_name[$i] = $_FILES[$field]['name'];
                        $file_tmp[$i] = $_FILES[$field]['tmp_name'];

                        // Validasi apakah file berupa PDF
                        
                        if($label=='kip'){
                          if (empty($file_name[$i])) {
                            $file_name[$i]='-';
                          }else{
                            if (isPDF($file_name[$i])) {
                              // Pindahkan file ke folder tujuan
                              move_uploaded_file($file_tmp[$i], "upload/data_siswa/$label/" . $file_name[$i]);
                            } else {
                                echo "<script>alert('Gagal mengupload $label. File harus berupa PDF.');</script>";
                                exit;
                            }
                          } 
                        }else if ($label=='foto') {
                          if (in_array($_FILES['foto']['type'], ['image/jpeg', 'image/jpg', 'image/webp', 'image/png'])) {
                              move_uploaded_file($file_tmp[$i], "upload/data_siswa/$label/" . $file_name[$i]);
                          } else {
                              echo "<script>alert('Hanya file dengan ekstensi jpg, jpeg, webp, atau png yang diizinkan.');</script>";
                              exit;
                          }
                        }else if (isPDF($file_name[$i])) {
                            // Pindahkan file ke folder tujuan
                            move_uploaded_file($file_tmp[$i], "upload/data_siswa/$label/" . $file_name[$i]);
                        } else {
                            echo "<script>alert('Gagal mengupload $label. File harus berupa PDF.');</script>";
                            exit;
                        }
                    $i++;
                  }

                  $conn->query("INSERT INTO siswa VALUES (NULL, '$kelas', '$nik', '$nama', '$tempat_lahir', '$tgl_lahir',
                  '$jns_kelamin','$hub_keluarga','$asal','$no_kk','$no_nisn',
                  '$tahun','$agama','$alamat_siswa','$nm_ayah',
                  '$nm_ibu','$nm_wali','$no_wa','$alamat_wali','$info',
                  '$file_name[1]','$file_name[2]','$file_name[3]','$file_name[4]','$file_name[5]', CURRENT_TIMESTAMP);");
                  
                  $query1 = $conn->query("SELECT MAX(id_siswa) as id FROM siswa");
                  $row1 = $query1->fetch_array();
                  $id_siswa=$row1['id'];

                  $conn->query("INSERT INTO siswa VALUES (NULL, '0', '$id_siswa', 'Menunggu Konfirmasi');");
                  echo "<script>alert('Pendaftaran berhasil mohon ditunggu 1x24 jam hari kerja untuk info lebih lanjut. Mohon cetak formulir berikut!!!');</script>";
                  echo "<script> window.location='formulir.php?id_siswa=$id_siswa' </script>";
                  }
              ?>
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