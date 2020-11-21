<?php

    include "koneksi.php";

    $dataNRP = $_GET['NRP'];

    $delete = mysqli_query($koneksi, "DELETE FROM `mahasiswa` WHERE nrp = '$dataNRP'");

    header("location:tampilan.php?delete=1");
?>