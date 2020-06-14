<?php
$nim=$_POST['NIM'];
$nama=$_POST['NAMA'];
$kelamin=$_POST['KELAMIN'];
$alamat=$_POST['ALAMAT'];
$prodi=$_POST['PRODI'];
$bahasa=$_POST['BAHASA'];
?>

<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<table width="500" border ="1">
	<tr>
		<td>NIM</td>
		<td><?= $nim; ?></td>
	</tr>

	<tr>
		<td>Nama</td>
		<td><?= $nama; ?></td>
	</tr>
			
	<tr>
		<td>Jenis Kelamin</td>
		<td><?= $kelamin; ?></td>
	</tr>
	
	<tr>
		<td>Alamat</td>
		<td><?= $alamat; ?></td>
	</tr>

	<tr>
		<td>Program Studi</td>
		<td><?= $prodi; ?></td>
	</tr>
	
	<tr>
		<td>Bahasa Pemrograman yang dikuasai</td>
		<td><?= $bahasa; ?></td>
	</tr>	
</table>
</body>
</html>