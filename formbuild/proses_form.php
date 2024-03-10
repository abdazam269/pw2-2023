<?php 

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$studi = $_POST['studi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>

<h1>Terima kasih sudah mendaftar</h1>
<h5>Nama Lengkap : <?php echo $nama ?></h5>
<h5>NIM : <?php echo $nim ?></h5>
<h5>Jenis kelamin :  <?php echo $jenis_kelamin ?></h5>
<h5>prodi :  <?php echo $studi ?></h5>
<h5>Keahlian : <?php echo $keahlian ?></h5>
<h5>Domisili :  <?php echo $domisili ?></h5>
<h5>Email :  <?php echo $email ?></h5>
