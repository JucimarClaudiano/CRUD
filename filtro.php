<?php

  // Carrega as classe necessárias
  include 'app.ado/SqlExpressao.class.php';
  include 'app.ado/TFiltro.class.php';

  //cria uma consulta com dado em string

  $filtro1 =new TFiltro('data', '=', '2019-02-05');
  echo $filtro1->dump();
  echo "<br>\n";

  $filtro2 =new TFiltro('salario', '>', 300);
  echo $filtro2->dump();
  echo "<br>\n";

  $filtro3 =new TFiltro('sexo', 'IN', array('M','F'));
  echo $filtro3->dump();
  echo "<br>\n";

  $filtro4 =new TFiltro('contrato', 'IS NOT', NULL);
  echo $filtro4->dump();
  echo "<br>\n";

?>