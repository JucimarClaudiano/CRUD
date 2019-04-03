<?php

	//carrega as classes necessária
include_once 'app.ado/SqlExpressao.class.php';
include_once 'app.ado/SqlCriteria.class.php';
include_once 'app.ado/TFiltro.class.php';

	// primeiro exemplo  utlizando um critério
	// idade menor o maior que 60
    
	$criterio = new SqlCriteria;
	$criterio->add(new TFiltro('idade', '<', 16), SqlExpressao::OR_OPERADOR);
	$criterio->add(new TFiltro('idade', '>', 60), SqlExpressao::OR_OPERADOR);
	echo $criterio->dump();
	echo "<br> \n";
     
	$criterio = new SqlCriteria;
	$criterio->add(new TFiltro('idade', 'IN', array(24,25,26)));
	$criterio->add(new TFiltro('idade', 'NOT IN', array(10)));
	echo $criterio->dump();
	echo "<br> \n";



	


?>