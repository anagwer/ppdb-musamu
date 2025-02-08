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
              <h3 class="card-title">Data Penerimaan</h3>
                <hr>
                
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Siswa</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Status Penerimaan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
											require 'dbcon.php';
											$bool = false;
                      $no=1; $id=$_SESSION['ID'];
                      $query = $conn->query("SELECT penerimaan.*,siswa.* FROM penerimaan JOIN siswa ON penerimaan.id_siswa=siswa.id_siswa order by id_penerimaan DESC");
                      while($row = $query->fetch_array()){
                        $id_penerimaan=$row['id_penerimaan'];
										?>
                  <tr>
                    <th scope="row"><?php echo $no; $no++;?></th>
                    <td style="width:20%;"><img src="upload/data_siswa/foto/<?php echo $row['foto'];?>" style="width:100%;"></td>
                    <td><?php echo $row['no_nisn'];?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><a href="https://api.whatsapp.com/send?phone=62<?php echo $row['no_wa'];?>" target="_BLANK" class="btn btn-warning"><i class="bi bi-whatsapp"></i></td>
                    <td><b>
                      <?php if($row['status']=='Diterima'){?>
                        <div style="color:green">
                          <?php echo $row['status'];?>
                        </div>
                      <?php 
                      }else if ($row['status']=='Ditolak'){ ?>
                        <div style="color:red">
                          <?php echo $row['status'];?>
                        </div>
                      <?php }else{
                      ?>
                      <div style="color:blue">
                        <?php echo $row['status'];?>
                      </div>
                      <?php 
                      }?></b></td>
                    <td style="text-align:center">
                      <a rel="tooltip"  title="Edit" id="<?php echo $row['id_penerimaan'] ?>" href="#edit_penerimaan<?php echo $row['id_penerimaan'];?>"  data-toggle="modal"class="btn btn-primary btn-outline"><i class="bi bi-pencil-square"></i> </a>
                    </td>
                        <?php 
                        require 'edit_penerimaan_modal.php';
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