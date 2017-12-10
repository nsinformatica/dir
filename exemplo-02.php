<?php
$images = scandir("images");
//var_dump($images);
$data = array();

foreach ($images as $img){
	if (!in_array($img, array(".",".."))){
		$filename = "images".DIRECTORY_SEPARATOR.$img;
		$info = pathinfo($filename);
		//var_dump($info);
		array_push($data, $info);
	}
}

echo json_encode($data);
?>