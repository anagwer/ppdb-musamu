<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar PPDB MUSAMU</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

</head>
<?php       
    require_once 'dbcon.php';
    $id_siswa =$_GET['id_siswa'];
    $query = $conn->query("SELECT * FROM siswa where id_siswa='$id_siswa'");
    $row = $query->fetch_array();
?>

<style>
  table, th,tr, td{
    border:solid 1px black;
  }
  b{
    margin-left:10px;
  }
  h4{
    margin-top:10px;
  }
</style>

<h3 class="text-center">Formulir PPDB</h3><hr>
<div class="text-right">
<p>Tanggal Daftar: <?php echo $row['tgl_daftar'];?></p>
</div>
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
<br>
<div class="row">
<div class="col-6 text-center">
  <br>
Mengetahui Orang Tua/Wali
<br><br><br><br>
.......................
</div>
<div class="col-6 text-center">
Magelang,.......................<br>
Peserta Didik
<br><br><br><br>
.......................
</div>
</div>