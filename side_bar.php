<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="dashboard.php" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">PPDB Musamu</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        
</span>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="profil.php">
                    <img src="upload/profil/<?php echo $_SESSION['FOTO']; ?>" alt="Profile" class="rounded-circle">
                </a><!-- End Profile Iamge Icon -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
<?php 
    // Get current page name
    $current_page = basename($_SERVER['PHP_SELF']); 
?>
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed text-center" href="#">
                <span><img src="upload/situs/logo.png" style="width:50%;border-radius:50%;margin:auto;"></span>
            </a>
        </li><!-- End Profile Nav -->
        <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'dashboard.php' ? '' : 'collapsed'; ?>" href="dashboard.php">
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'siswa.php' ? '' : 'collapsed'; ?>" href="siswa.php">
                <span>Data Siswa</span>
            </a>
        </li><!-- End Data Menu Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'penerimaan.php' ? '' : 'collapsed'; ?>" href="penerimaan.php">
                <span>Data Penerimaan</span>
            </a>
        </li><!-- End Data User Nav -->
        <li class="nav-item">
            <a class="nav-link <?php echo $current_page == 'user.php' ? '' : 'collapsed'; ?>" href="user.php">
                <span>Data User</span>
            </a>
        </li><!-- End Data User Nav -->
        <li class="nav-item">
          <a class="nav-link <?php echo $current_page == 'logout.php' ? '' : 'collapsed'; ?>" href="logout.php">
              <span>Logout</span>
          </a>
        </li><!-- End Data User Nav -->
    </ul>
    
</aside><!-- End Sidebar -->