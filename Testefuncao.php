<?php

/*
 *Criando uma classe
 *Testar um construtor
 */

 //início da classe teste

 class teste{
 
 	//criando as variáveis
 	private $teste;
 	private $teste2;
 	private $teste3;

 	//criando o método construtor

 	function __construct($teste, $teste2, $teste3)

	 {
	 	$this->teste = $teste;
	 	$this->teste2 = $teste2;
	 	$this->teste3  = $teste3;

	 }

	 function dump()
	 {
	 	return  "{$this->teste}{$this->teste2}{$this->teste3}";

	 }	
	 	
}

?>