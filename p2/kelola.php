<?php
include"config.php";
$id_pendaftaran = '';
    $nama ='';
    $no_telepon ='';
    $email ='';
    $alamat ='';
    $desa ='';
    $kecamatan ='';
    $kabupaten ='';
    $provinsi ='';
    $kode_pos ='';
    $jk ='';
    $agama ='';
    $sekolah_asal =''; 
    $tanggal_lahir ='';

   
if(isset($_GET['edit'])){
  $id_pendaftaran = $_GET['edit'];
  $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db,$sql);
    $result =mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $no_telepon = $result['no_telepon'];
    $email = $result['email'];
    $alamat = $result['alamat'];
    $desa = $result['desa'];
    $kecamatan = $result['kecamatan'];
    $kabupaten = $result['kabupaten'];
    $provinsi = $result['provinsi'];
    $kode_pos = $result['kode_pos'];
    $jk = $result['jenis_kelamin'];
    $agama = $result['agama'];
    $sekolah_asal = $result['sekolah_asal'];
    $tanggal_lahir = $result['tangga_lahir'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">rumah</a>
        <a class="nav-link" href="kelola.php">Pendaftaran</a>
        <a class="nav-link" href="index2.php">data guru</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses.php" method="POST">
  <input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" value = "<?php echo $nama;?>" placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="tangga_lahir" class="form-label">tanggal_lahir </label>
  <input type="date" class ="form-control" id="tanggal" name="tangga_lahir" value = "<?php echo $tanggal_lahir;?>" placeholder="tanggal_lahir" />
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
            <option <?php if($agama == 'Islam') {echo "selected";}?> value="Islam">Islam</option>
            <option <?php if($agama == 'Kristen') {echo "selected";}?> value="Kristen">Kristen</option>
            <option <?php if($agama == 'Hindu') {echo "selected";}?> value="Hindu">Hindu</option>
            <option <?php if($agama == 'Buddha') {echo "selected";}?> value="Buddha">Buddha</option>
            </select>
</div>
<div class="mb-3">
  <label for="no_telepon" class="form-label">no_telepon: </label>
  <input type="text" class ="form-control" name="no_telepon"  value = "<?php echo $no_telepon;?>" placeholder="no_telepon" />
</div>
<div class="mb-3">
  <label for="email" class="form-label">email </label>
  <input type="email" class ="form-control" name="email"  value = "<?php echo $email;?>" placeholder="email" />
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <input type="text" class ="form-control" name="alamat"  value = "<?php echo $alamat;?>" rows="3"></input>
</div>
<div class="mb-3">
  <label for="desa" class="form-label">desa</label>
  <input type="text" class ="form-control" name="desa"  value = "<?php echo $desa;?>" placeholder="desa" />
</div>
<div class="mb-3">
  <label for="kecamatan" class="form-label">kecamatan</label>
  <input type="text" class ="form-control" name="kecamatan" value = "<?php echo $kecamatan;?>" placeholder="kecamatan" />
</div>

<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin"<?php if ($jk == 'laki-laki'){echo "checked";}?> value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin"<?php if ($jk == 'perempuan'){echo "checked";}?>  value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" value = "<?php echo $sekolah_asal;?>" placeholder="nama sekolah" />
</div>
<div class="mb-3">
    <label for="kabupaten" class="form-label">kabupaten: </label>
    <select name="kabupaten" class="form-control">
        <option <?php if($kabupaten == 'Kabupaten Bandung') {echo "selected";}?> value="Kabupaten Bandung">Kabupaten Bandung</option>
        <option <?php if($kabupaten == 'Kabupaten Bandung Barat') {echo "selected";}?> value="Kabupaten Bandung Barat">Kabupaten Bandung Barat</option>
        <option <?php if($kabupaten =='Kabupaten Sumedang'){echo "selected";}?> value="Kabupaten Sumedang">Kabupaten Sumedang</option>
        <option <?php if($kabupaten == 'Kota Bandung') {echo "selected";}?> value="Kota Bandung">Kota Bandung</option>
        <option <?php if($kabupaten == 'Kota Cimahi') {echo "selected";}?> value="Kota Cimahi">Kota Cimahi</option>
</select>
</div>
<div class="mb-3">
    <label for="provinsi" class="form-label">provinsi: </label>
    <select name="provinsi" class="form-control">
<option <?php if($provinsi == 'Banten') {echo "selected";}?> value="Banten">Banten</option>
<option <?php if($provinsi == 'D.I Yogyakarta') {echo "selected";}?> value="D.I Yogyakarta">D.I Yogyakarta</option>
<option <?php if($provinsi == 'DKI Jakarta') {echo "selected";}?> value="DKI Jakarta">DKI Jakarta</option>
<option <?php if($provinsi == 'Jawa Barat') {echo "selected";}?> value="Jawa Barat">Jawa Barat</option>
<option <?php if($provinsi == 'Jawa Tengah') {echo "selected";}?> value="Jawa Tengah">Jawa Tengah</option> 
<option <?php if($provinsi == 'Jawa Timur') {echo "selected";}?> value="Jawa Timur">Jawa Timur</option>
</select>
</div>
<div class="mb-3">
<label for="kode_pos" class="form-label">kode_pos: </label>
    <input type="text" class ="form-control" name="kode_pos" value = "<?php echo $kode_pos;?>" placeholder="kode_pos" />
</div>
<div class="mb-3 row mt-4">
  <div class="col">
  <?php
  if (isset($_GET['edit'])){
    ?>
    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
      simpan perubahan 
  </button>
  <?php
  }else{
    ?>
    <button type="submit"  name="aksi" value="add" class="btn btn-primary">
      Daftar
      </button>
      <?php
  }
  ?>
   <a href="index.php" type="button" class="btn btn-danger">batal</a>
   </div>
    </form>
</div>
    </body>
</html>