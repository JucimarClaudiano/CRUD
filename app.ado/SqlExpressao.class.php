<?php
/*
 *Criando a classe abstrada expressão
 *gerencia as expressoes do comando sql
 */

abstract class  SqlExpressao
{

	/*
	 *Criando a variavel do tipo constante 
	 *armazenar os operadores logicos
	 */

	 const AND_OPERADOR = 'AND';
	 const OR_OPERADOR = 'OR';

	 //Criando o método dump como obrigatório

	  abstract public function dump();
	

}


?>