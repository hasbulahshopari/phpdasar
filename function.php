<?php 
function salam($waktu, $nama) {
	return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan fuction</title>
</head>
<body>
	<h1><?= salam("siang", "buloh");  ?></h1>
</body>
</html>