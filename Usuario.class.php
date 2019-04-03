<?php

class Usuario
{

	//criando um propriedade privada
	var $conexao;

//criando metodo construtor para conexão do banco
	public function Conexao()
	{
		try
		{
		$conexao = new PDO ('mysql:dbname=php;host=192.168.0.180', 'root', 's0rt33$13@root');


	}catch (PDOxception $e)
	{
		print "Erro!: " .$e->getMessage() . "\n";
		die();
	}
	}


}

?>