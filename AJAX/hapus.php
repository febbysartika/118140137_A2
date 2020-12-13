<?php
include 'koneksiData.php';

$nim = $_POST['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
$hasil = mysqli_query($koneksi, $sql);
?>