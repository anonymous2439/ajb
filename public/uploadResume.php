<?php
	$validFile=array('file'=>$_FILES['resume']['name'],'valid'=>false);
	$path='uploaded/'.basename($_FILES['resume']['name']);
	$ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
	if(($_FILES['resume']['size']<=900000)&&($ext=='doc'||$ext=='docx'||$ext=='odt'||$ext=='pdf'||$ext=='rtf')){
		$validFile['valid']=true;
      	move_uploaded_file($_FILES['resume']['tmp_name'],$path);
    }
	echo json_encode($validFile);