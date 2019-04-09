<?php

/*
 * Classe SqlInserção
 * objetivo manipular uma instrução do insert no banco de dados
 */

final class SqlInsercao extends SqlIntrucao
{
		/*
		 * Criando método setRowData()
		 * objetivo determinar valores as colunas do banco de dados
		 * @param $coluna  = coluna da tabela
		 * @param $valor  = valor a ser armazenado
		 */

		public function setRowData($coluna, $valor)
		{
			// Cria um arrray indexando o nome da coluna
			if(is_string($valor))
			{
				$valor  = addslashes($valor);

				//caso seja uma string
				$this->columnValues[$coluna] = "'$valor'";
			}

				else if (is_bool($valor))
				{
					$this->columnValues[$coluna] = $valor ? 'TRUE': 'FALSE';
				}
					else if (isset($valor))
					{
						//caso seja outro tipo de dados
						$this->columnValues[$column] = $valor;
					}
					else
					{
					//caso seja valor do tipo null
					$this->columnValues[$coluna] = "NULL";
				}
	    }

	/*
	 * metodo setCriterio()
	 * não existe contexto nessa classe, vai lançar erro ao ser executado.
	 */

	public function setCriterio($criterio)
	{
		//lança execessão de erro
		throw new Exception("Nao pode usar esse método from" . __CLASS__);
	}

	/*
	 *Métdo getInstruction()
	 *retorna a instrução de insert em forma de string
	 */

	public fucntion getInstrução()
	{
		$this-> = "INSERT INTO {$this-> entidade}(";
		
		//monta um stringe contendo os nomes de colunas
		$columns = implode(',', array_values($this->columnValues));

		//monta um string contendo os valores
		$valor = implode(',', array_valor($this->columnValues));
		$this->sql .= $columns . ')';
		$this->sql .= "valor ({$valor})";
		return $this->sql;

	
	}
}
?>