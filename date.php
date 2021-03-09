<?php 
	echo date("l, d-M-Y");

// echo time();
// echo date("l", time()+60*60*24*100);

// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tnggal, tahun
echo date("l" mktime(0,0,0,10,13,1999));

// strtotime
// echo date("l" strtotime("13 september 2019"));


?>