<?php

  // Carrega as classe necessárias
  include_once 'SqlExpressao.class.php';
  include_once 'TFiltro.class.php';

  //cria uma consulta com dado em string

  $filtro1 =new TFiltro('data' );
  echo $filtro1->dump();
  echo "<br>\n";
  

?>