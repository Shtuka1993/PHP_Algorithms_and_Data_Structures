<?php
	function rotateLeft($d, $arr) {
		for ( $i = 0; $i < $d; $i++) 
			array_push( $arr, array_shift($arr) );

		return $arr;
	}
	$d = 1;
	$arr = [1, 2, 3, 4, 5, 6, 7];
	$result = rotateLeft($d, $arr);
	var_dump($result);
?>