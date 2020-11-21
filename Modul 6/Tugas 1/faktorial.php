<?php 

    function faktorial($n){
        $angka = 1;
        $nilai = 1;
        while($angka <= $n){
            $nilai = $nilai * $angka;
            $angka = $angka + 1;
        }
        return $nilai;
    }

    if(isset($_POST['hitung'])){
        $n = $_POST['faktorial'];
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas Faktorial</title>
</head>
<body>

<h2>Mencari Nilai Faktorial</h2>

<form method="POST">
    Input nilai : <input type="text" name="faktorial" required>
    <button type="submit" name="hitung">Hitung</button>
</form>

<h3>Hasil Faktorial : 
<?php
    echo faktorial($n);
?>
</h3>

</body>
</html>