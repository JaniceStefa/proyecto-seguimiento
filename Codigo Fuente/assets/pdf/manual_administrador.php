<?php
	$tam = filesize("manual_admi.pdf");
	header("Content-type: application/pdf");
	header("Content-Length: $tam"); 
	header("Content-Disposition: inline; filename=manual_admi.pdf");
	$file='manual_admi.pdf';
	readfile($file);
?>