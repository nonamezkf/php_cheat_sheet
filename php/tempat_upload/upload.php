<?php

	$fileUpload = move_uploaded_file($_FILES['file']['tmp_name'], "tempat_upload/" . $_FILES['file']['name']);
	
	if($fileUpload){
	
		echo "File berhasil di upload, silahkan buka folder tempat_upload untuk melihatnya.";
	}
	else
	{
		echo "File gagal di upload";
	}
	
?>	