<!DOCTYPE html>
<html>
<head>
	<title>Sorting data</title>
	<link rel="stylesheet" type="text/css" href="style_sorting.css">
</head>
<body>
	<?php
		$data = array(	"lanirne", "aduh", "qifuat", "toda", "anevi",
						"samid", "kifuat", "akjdh", "klfdsjls", "fuacd" );
	?>

	<div class="dataSorting">
		<h3 class ="data">Data acak sebelum diurutkan : </h3>
		<?php	
		for ($x = 0; $x < count($data); $x++) {
  			echo $data[$x] . "<br>";
		}
		//fungsi mengurutkan dari kecil ke besar
		sort($data); 
		?>

		<h3 class="data">Data acak setelah diurutkan :</h3>
		<?php
		for ($x = 0; $x < count($data); $x++) {
  			echo $data[$x] . "<br>";
		}
		?>
</body>
</html>

