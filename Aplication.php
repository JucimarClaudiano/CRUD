<?php

/* Criando a classe aplicação
 * Essa classe tem o objetivo 
 * Testar a classe  Testefuncao
 */

//carrega as classes
   	include 'Testefuncao.php';

   	 //instanciando o objeto
   	$teste = new Teste('teste', 'realizado', 'sucesso');

   	echo $teste->dump();
   	echo "<br>\n";
   

?>