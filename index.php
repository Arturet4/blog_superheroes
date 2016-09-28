<?php
//index.php
//escrito por Arturo Ferrando Artola
//error_reporting(0);

	if (isset($_GET['id'])) {
		
		require_once 'detalle.php';
	}else{

		require_once 'todo.php';
	}
?>