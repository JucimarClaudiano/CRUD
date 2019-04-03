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

	$criterio = new SqlCriteria;
	$criterio->add(new TFiltro('nome', 'like', 'pedro%'), SqlExpressao::OR_OPERADOR);
	$criterio->add(new TFiltro('nome', 'like', 'maria%'), SqlExpressao::OR_OPERADOR);;
	echo $criterio->dump();
	echo "<br> \n";

    $criterio = new SqlCriteria;
	$criterio->add(new TFiltro('telefone', 'IS NOT', NULL));
	$criterio->add(new TFiltro('sexo', '=', 'F'));
	echo $criterio->dump();
	echo "<br> \n";

	$criterio = new SqlCriteria;
	$criterio->add(new TFiltro('UF', 'IN', array('RS', 'SC', 'PR')));
	$criterio->add(new TFiltro('UF', 'NOT IN', array('AC', 'PI')));
	echo $criterio->dump();
	echo "<br> \n";

	$criterio1 = new SqlCriteria;
	$criterio1->add(new TFiltro('sexo', '=', 'F'));
	$criterio1->add(new TFiltro('idade', '>', '18'));

	$criterio2 = new SqlCriteria;
	$criterio2->add(new TFiltro('sexo', '=', 'M'));
	$criterio2->add(new TFiltro('idade', '<', '16'));

	$criterio = new SqlCriteria;
	$criterio->add($criterio1, SqlExpressao::OR_OPERADOR);
	$criterio->add($criterio2, SqlExpressao::OR_OPERADOR);
	echo $criterio->dump();
	echo "<br> \n";



	


?>