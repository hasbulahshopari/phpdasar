<?php 
$mahasiswa = [
	["Hasbulah Shopari", "203040004", "teknik informatika", "hasbullahhasbu01@gmail.com"],
	["Althafurrohman", "203040123", "teknik informatika", "althafurrohman01@gmail.com"],
	["Shahwa azfatun", "203040023", "teknik informatika", "shahwaazfatun01@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
	<li>NAMA : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>




</body>
</html>