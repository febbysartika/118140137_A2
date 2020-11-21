<?php

	$koneksi = mysqli_connect("localhost","root","","tugaspraktikum");

	 if(mysqli_connect_errno()){
        echo "Koneksi ke database error. Code Error : " . mysqli_connect_error();
    }

?>