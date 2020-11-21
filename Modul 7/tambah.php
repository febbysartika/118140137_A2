<?php 

    include "connect.php";

    $nrp        = $_POST['nrp'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jurusan    = $_POST['jurusan'];

    $tambahData = mysqli_query($koneksi, "INSERT INTO `mahasiswa` VALUES ('$nrp', '$nama', '$alamat', '$jurusan')");

    header("location:tampilan.php?tambahData=1");

?>