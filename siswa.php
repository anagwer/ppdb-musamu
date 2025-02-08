<?php include ('session.php');?>
<?php include ('head.php');?>


<body>
    <!-- Navigation -->
    <?php include ('side_bar.php');?>

  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Data Siswa</h3>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="bi bi-plus-lg"></i> Tambah</button>
                <?php include ('add_siswa_modal.php');?>
                <hr>
                
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat, Tanggal Lahir</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Kartu Keluarga</th>
                    <th scope="col">Ijazah</th>
                    <th scope="col">Akta</th>
                    <th scope="col">KIP</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
											require 'dbcon.php';
											$bool = false;
                      $no=1; $id=$_SESSION['ID'];
                      $query = $conn->query("SELECT * FROM siswa order by id_siswa DESC");
                      while($row = $query->fetch_array()){
                        $id_siswa=$row['id_siswa'];
										?>
                  <tr>
                    <th scope="row"><?php echo $no; $no++;?></th>
                    <td style="width:40%;"><img src="upload/data_siswa/foto/<?php echo $row['foto'];?>" style="width:100%;"></td>
                    <td><?php echo $row['kelas'];?></td>
                    <td><?php echo $row['nik'];?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['tempat_lahir'].', '.$row['tgl_lahir'];?></td>
                    <td><?php echo $row['asal'];?></td>
                    <td><a href="upload/data_siswa/kk/<?php echo $row['kk'];?>" class="btn btn-success" target="_BLANK"><i class="bi bi-eye"></i></a></td>
                    <td><a href="upload/data_siswa/ijazah/<?php echo $row['ijazah'];?>" class="btn btn-success" target="_BLANK"><i class="bi bi-eye"></i></a></td>
                    <td><a href="upload/data_siswa/akta/<?php echo $row['akta'];?>" class="btn btn-success" target="_BLANK"><i class="bi bi-eye"></i></a></td>
                    <td>
                    <?php if($row['kip']=='-'){
                      echo '-';
                    }  else{?>
                      <a href="upload/data_siswa/kip/<?php echo $row['kip'];?>" class="btn btn-success" target="_BLANK"><i class="bi bi-eye"></i></a>
                    <?php }?>
                    </td>
                    <td style="text-align:center">
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="printNota();"><i class="bi bi-printer-fill"></i></a>
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
                      <a rel="tooltip"  title="Delete" id="<?php echo $row['id_siswa'] ?>" href="#delete_siswa<?php echo $row['id_siswa'];?>"  data-toggle="modal"class="btn btn-danger btn-outline"><i class="bi bi-trash-fill"></i> </a>		
										</td>
                        <?php 
                        require 'delete_siswa_modal.php';
												?>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include ('footer.php');?>
      <?php include ('script.php');?>

</body>

</html>