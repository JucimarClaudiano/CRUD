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
		throw new Exception("Nao pode usar esse método from" . __CLASS__);
	}
?>