<?php
session_start();
	
?>
<?php
function jsonFiletoArray($path){
	$f = fopen($path, 'r');
	$content = fread($f, filesize($path));
	$json_array = json_decode($content, true);
	fclose($f);
	return $json_array;
}
?>
<?php
function appendJsonArraytoFile($path){
	$content = file_get_contents($path);
	$content = json_decode($content, true);
	$content[] = $_POST;
	$content = json_encode($content, JSON_PRETTY_PRINT);
	file_put_contents($path, $content);
}
?>
<?php
function replaceElementInArrayJson($path){
	//read file
	$content = file_get_contents($path);
	//convert to json string into php array
	$content = json_decode($content, true);
	//get the element with the index in the query string
	$item = $content[$_GET['index']];
	if(count($_POST)>0){
		//replace the item with data sent via the form
		$item = $_POST;
		//put the item back into the array of items
		$content[$_GET['index']] = $item;
		//encode erray into a json string
		$content = json_encode($content, JSON_PRETTY_PRINT);
		//save the file
		file_put_contents($path, $content);
		echo 'Changes Saved';
	}else
		die();
}
?>