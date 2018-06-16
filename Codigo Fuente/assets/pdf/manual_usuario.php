<?php
	$tam = filesize("manual.pdf");
	header("Content-type: application/pdf");
	header("Content-Length: $tam"); 
	header("Content-Disposition: inline; filename=manual.pdf");
	$file='manual.pdf';
	readfile($file);
?>