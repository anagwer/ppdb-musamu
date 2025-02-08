<?php include ('session.php');?>
<?php include ('head.php');?>


<body>
    <!-- Navigation -->
    <?php include ('side_bar.php');?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-4">
            <!-- Sales Card -->
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah User</h5>

                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h6><?php 
                      require 'dbcon.php';
                      $query1 = $conn->query("SELECT COUNT(*) as jml FROM user");
                      $row1 = $query1->fetch_array();
                      echo $row1['jml'];
                    ?></h6>

                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
        </div>
        <!-- Left side columns -->
        <div class="col-lg-4">
            <!-- Sales Card -->
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Data Siswa Diterima</h5>

                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h6><?php 
                      require 'dbcon.php';
                      $query1 = $conn->query("SELECT COUNT(*) as jml FROM penerimaan where status='Diterima'");
                      $row1 = $query1->fetch_array();
                      echo $row1['jml'];
                    ?></h6>

                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
        </div>
        <!-- Left side columns -->
        <div class="col-lg-4">
            <!-- Sales Card -->
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Data Pendaftar Siswa</h5>

                <div class="d-flex align-items-center">
                  <div class="ps-3">
                    <h6><?php 
                      require 'dbcon.php';
                      $query1 = $conn->query("SELECT COUNT(*) as jml FROM siswa");
                      $row1 = $query1->fetch_array();
                      echo $row1['jml'];
                    ?></h6>

                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
        </div>
        
        <!-- Left side columns -->
        <div class="col-lg-12">
            <!-- Sales Card -->
            <div class="card info-card sales-card">
              <div class="card-body text-center p-5">
                <h1><b>SELAMAT DATANG<br>PPDB Musamu</b></h1>
                <h3>Alamat: Ngadiretno, Tamanagung, Kec. Muntilan, Kabupaten Magelang, Jawa Tengah 56413</h2>
              </div>
            </div><!-- End Sales Card -->
        </div>
  </main><!-- End #main -->

  <?php include ('footer.php');?>
      <?php include ('script.php');?>

</body>

</html>