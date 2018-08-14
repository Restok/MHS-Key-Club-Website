<?php
	$fPath = "";
	$column = $_POST['colNum'];
	switch($column){
		case 0:
			$fPath = "img/gallery/slide/";
		case 1:
			$fPath = "img/gallery/column1/";
			break;
		case 2:
			$fPath = "img/gallery/column2/";
			break;

		case 3:
			$fPath = "img/gallery/column3/";
			break;

		case 4:
			$fPath = "img/gallery/column4/";
			break;
	}
	$old = getcwd();

	$fileDir = $fPath;
	$fileName = $_POST['fileToDelete'];
	chdir($fileDir);
	if(unlink($fileName)){
		echo("FILE DELETE SUCCESSFULLY");
	}
	else{
		echo("SOMETHING WENT WRONG");
	}
	chdir($old);
?>