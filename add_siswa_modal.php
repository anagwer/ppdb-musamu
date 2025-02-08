<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah User</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
										
										
            <div class="modal-body">
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

				$conn->query("INSERT INTO penerimaan VALUES (NULL, '0', '$id_siswa', 'Menunggu Konfirmasi');");
				echo "<script>alert('Pendaftaran berhasil.');</script>";

				}
				?>
			</div>
            <div class="modal-footer">
              <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
            </div>
									
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>
