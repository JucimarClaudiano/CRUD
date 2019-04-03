<?php
  /*
   *Criando a classe filtro
   *objetivo definir filtros de seleção
   */

   class TFiltro extends SqlExpressao
   {

   	//Criando as variável para receber os valores do script sql

   	private $desc_col ; //variável
   	private $operador ; //operador de comparação
   	private $valor_col; //valor a comparar no sript sql

   	/*
   	 *Criando o método construtor
     *inicia um novo filtro
     *$desc_col; nome da coluna
   	 *$operador; (>,<)
   	 *$valor_col //valor a comparado
     */

    function __construct($desc_col, $operador, $valor_col)
    {
    	//guardando as propriedades
    	$this->desc_col = $desc_col;
    	$this->operador = $operador;

    	/*
    	 *antes da variavel receber o valor 
    	 * a informação  tratada pelo metodo transform
    	 */
    	$this->valor_col = $this->transform($valor_col);
    }

    /*
     *Criando o método transform
     *Objetivo receber o varlor e modificar
     *para ser interpretado pelo o banco de dados
     */
     
     private function transform($valor_col)

     {
     	//ARRAY

     	if(is_array($valor_col))
     	{
     		//percorre as informações da array
     		foreach ($valor_col  as $x)
     		{
     			// inteiro
     			if(is_integer($x))
     			{
     				$foo[]=$x;
     			}
     			else if (is_string($x))
     			{
     				//Adciona  aspas
     				$foo[]="'$x'";
     			}
     		}
     	
     	   //coverte array em string e separa por vrgualç
     	   $result= '(' . implode(',', $foo) . ')';
        }

     	// string
     	else if (is_string($valor_col))
     	{
     		//adciona aspa
     		$result = "'$valor_col'";
     	}
     	// valor nullo
     	else if(is_null($valor_col))
     	{
     		//armazena null
     		$result= 'NULL';
     	}
     		
     	//booleano
     	else if(is_bool($valor_col))
     	{
     		//armazena TRUE ou FALSE
     		$result = $valor_col ? 'TRUE' : 'FALSE';
     	}
     	else 
     	{
     		$result = $valor_col;
     	}
     	//retorna o valor
     	return $result;
     }
     	/* 
     	 *criando o método dump
     	 * retorna o filtro em forma de expressão
     	*/

     	public function dump()
     	{
     		//concatenando a expressão
     		return "{$this->desc_col} {$this->operador} {$this->valor_col}";
     	}

   }

?>