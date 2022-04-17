<?php
	echo "Input validation using HTML5 <br>";
	echo "Nama : ".$_POST['nama']."<br>";
	echo "Email : ".$_POST['email']."<br>";
	echo "Situs : ".$_POST['situs']."<br>";
	echo "Usia : ".$_POST['usia']."<br>";
	echo "Nilai : ".$_POST['nilai']."<br>";
	echo "Gender : ".$_POST['gender']."<br>";
	echo "Moda Transportasi <br> ";
	if(isset($_POST['moda1']))
		echo $_POST['moda1']." ";
	if(isset($_POST['moda2']))
		echo $_POST['moda2']." ";
	if(isset($_POST['moda3']))
		echo $_POST['moda3']." ";
	if(isset($_POST['moda4']))
		echo $_POST['moda4']." ";
	echo "<br";
 echo "Tg Lahir: ".$_POST['tgl']."<br>";
 echo "Tg Lahir: ".date('d-M-Y',strtotime($_POST['tgl']))."<br>";
// $tgl = $_POST['tg']."-".$_POST['bl']."-".$_POST['th'];
// echo "Tg Lahir: ".$tgl."<br>";
// echo "Tg Lahir: ".date('d-M-Y',strtotime($tgl))."<br>";


?>