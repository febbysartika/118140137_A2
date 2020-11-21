<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 2 Ubah Huruf</title>
</head>
<body>
<h2>Menghitung harga bet</h2>
<form method="post">
    Nama : <input type="text" name="huruf"> <br><br><br>
    Warna Font : <input type="text" name="warna">
    <button type="submit" name="submit">Submit</button>
</form>

<?php 

function jumlahHuruf($huruf){
    $jumlah = strlen($huruf);
    return $jumlah;
}

if(isset($_POST['submit'])){
    $huruf = $_POST['huruf'];
    $warna = $_POST['warna'];
    ?>
    <h3>Hasil Output</h3>
    <?php
    if(jumlahHuruf($huruf)==" "){
        echo '<font color="red">Nama : Nama belum diinput</font>'; echo '<br>';
        echo '<font color="red">Harga : Tidak ada harga </font>';
    }

    else if(jumlahHuruf($huruf)<=10 && jumlahHuruf($huruf)>0){
        $harga = 300;
        $tot = jumlahHuruf($huruf)*$harga;
        echo '<font color="blue">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="blue">Harga : '.$tot."</font>";
    }

    elseif(jumlahHuruf($huruf)<=20){
        $harga = 500;
        $tot = jumlahHuruf($huruf)*$harga;
        echo '<font color="yellow">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="yellow">Harga : '.$tot."</font>";
    }

    elseif(jumlahHuruf($huruf)>20){
        $harga = 700;
        $tot = jumlahHuruf($huruf)*$harga;
        echo '<font color="green">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="green">Harga : '.$tot."</font>";
    }
}

?>


</body>
</html>