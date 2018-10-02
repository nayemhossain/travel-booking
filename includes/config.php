<?php
	
	$db_config = new mysqli('localhost', 'phphyper_papon', 'yNo{A{QSh*KQ', 'phphyper_papon');

	if($db_config){
		$db_config->query('SET CHARACTER SET utf8'); 
		$db_config->query("SET SESSION collation_connection ='utf8_general_ci'");
		//echo "connect succissfully";
	}

?>