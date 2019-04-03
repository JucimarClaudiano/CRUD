<?php

	/*
	 * Classe define uma interface
	 * definindo critério de expressão sql
	 */

	class SqlCriteria extends SqlExpressao
	{

		//criando as variaveisl
		private $expressao;  //lista de expressao
		private $operador;   // lista de operadores
		private $propriedade; // propriedade do critério


	/*
	 * Criando o método add()
	 * adiciona um expressao ao script sql
	 * @param $expressao = (objeto SqlExprressao)	
	 * @param $operador = operador lógico
	 */

	public function add (SqlExpressao $expressao, $operador = self::AND_OPERADOR)
	{
       //primiera vez não precisa de operador lógico
		if(empty($this->expressao))
		{
			unset($operador);
		
		}
		// o resultado da expressão a lista de expressões
	   $this->expressao[] = $expressao;
	   $this->operador[] = $operador;
	  
	} 	


	/*
	 * método dump
	 * retorna a expressão
	 */

	public function dump()
	{
		//concatenando a lista de expressão
		if(is_array ($this->expressao))
		{
			//lendo o array
			foreach ($this->expressao as $i => $expressao) 
			{
				$operador = $this->operador[$i];
				$resultado .= ' ' . $operador. ' '. $expressao->dump(). '';

				
			}
			$resultado = trim($resultado);
			return "({$resultado})";

			
		}
	}

	/*
	 * método setPropriedade()
	 * define o valor de uma propriedade
	 * @param $propriedade
	 * @param $valor
	 */
	public function setPropriedade($propriedade, $valor)
	{
		 $this->propriedade[$propriedade] = $valor;
	}
    /*
	 * método getPropriedade()
	 * retorna o valor de uma propriedade
	 * @param $propriedade
	 */
    public function getPropriedade($propriedade)
    {
    	return $this->propriedade[$propriedade];
    }
	}


?>