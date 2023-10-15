<?php

function csvFiletoArrayWithTwoIndexes($path){
	$csvArray = [];
	$fp = fopen($path, 'r');
		while (!feof($fp)){
			$line = fgets($fp);
			if(strlen($line) < 5) continue;
				$line = explode(';', trim($line));
				array_push($csvArray, [$line[0], $line[1]]);
		
		}
		fclose($fp);	
		return $csvArray;
}

function csvFiletoArrayWithThreeIndexes($path){
	$csvArray = [];
	$fp = fopen($path, 'r');
		while (!feof($fp)){
			$line = fgets($fp);
			if(strlen($line) < 5) continue;
				$line = explode(';', trim($line));
				array_push($csvArray, [$line[0], $line[1], $line[2]]);
		
		}
		fclose($fp);	
		return $csvArray;
}

?>