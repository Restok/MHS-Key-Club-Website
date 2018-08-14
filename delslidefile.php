<?php
	$old = getcwd();
	$fileDir = "img/gallery/slide/";
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