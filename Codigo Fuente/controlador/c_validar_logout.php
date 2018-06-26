<?php
	session_start();
	session_destroy();
	echo 'Cerrando sesión';
	echo '<script> window.location="../index.php"; </script>';
?>