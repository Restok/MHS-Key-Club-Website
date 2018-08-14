<?php

if(isset($_POST['submit'])){
	$fPath = "";
	$column = $_POST['colNum'];
	switch($column){
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
    if(count($_FILES['colUpload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['colUpload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['colUpload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['colUpload']['name'][$i];

                //save the url and the file
                $filePath = $fPath . $_FILES['colUpload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file

                }
              }
        }
    }

    //show success message
    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
	else{
		echo "Upload Failed";
	}
}
?>