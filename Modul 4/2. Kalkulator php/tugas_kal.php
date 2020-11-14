<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<article>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case '+':
				$hasil = $bil1 + $bil2;
			break;
			case '-':
				$hasil = $bil1 - $bil2;
			break;
			case '*':
				$hasil = $bil1 * $bil2;
			break;
			case '/':
				$hasil = $bil1 / $bil2;
			break;
			case '%':
				$hasil = $bil1 % $bil2;
			break;
			default:
				$hasil = "Pilih operasi kalkulator";
			break;
		}
	}
	?>
	<div class="kalkulator">
		<h1 class="judul">KALKULATOR</h1>
		<form method="post" action="tugas_kal.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"><br><br>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua"><br><br>
			<select class="opt" name="operasi">
				<option value="#">Pilih Operator</option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
				<option value="%">% (mod)</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol"><br><br>										
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php } else { ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</article>
</body>
</html>