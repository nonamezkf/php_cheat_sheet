<?php

	function aritmatika($nilai1,$nilai2,$tugas)
	{
		if($tugas == "+"){
			$hasil = $nilai1 + $nilai2;
		}
		else if($tugas == "-"){
			$hasil = $nilai1 - $nilai2;
		
		}
		else if($tugas == "*"){
			$hasil = $nilai1 * $nilai2;
		}
		else if($tugas == "/"){
			$hasil = $nilai1 / $nilai2;
		}
		return $hasil;
	
	}
	
	echo aritmatika(7,2,"+");
	echo "<br/>";
	echo aritmatika (5,2,"-");
	echo "<br/>";
	echo aritmatika (5,5,"*");
	echo "<br/>";
	
	$ininilai1 = 5;
	$ininilai2 = 5;
	$tugasnya = "/";
	echo aritmatika ($ininilai1, $ininilai2, $tugasnya);
	
?>