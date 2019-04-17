<?PHP 
	
	/*
	 *Classe Conexao
	 * Gerencia as conexões atráves de arquivos .ini
	 */


	final class TConection
	{
		/*
		 * método __construct()
		 *não existe objetos da clase TConection, por isso é priv ate
		 */

		private function __construct ()
		{
			/*
			 *método open()
			 *recebe o nome do banco de dados e instancia o objeto PDO
			 */

		}

		public static function onpen($name)
		{
			//lê o INI e retorna um arrqy
			$db = parse_ini_file("app.config/{$name} .ini");
		}
		else
		{
			// se não existir, lança um erro
			throw new Exception("Arquivo '$name' não encontrado");
		}


			//lendo as informações lidas no arquivo
		$user  = $db['user']
		$pass  = $db['pass']
		$name  = $db['name']
		$host  = $db['host']
		$type  = $db['type']

		// seleciona quao tipo do banco a ser utilizado

		switch ($type) 
		{
			case 'psql':
				 $conn = new PDO ("pgsql: dbname={$name}; user={$user}; password={$pass};host=host");
				break;

            case 'mysql':
				 $conn = new PDO ("mysql: host={$hots}; port=3306; dbname={$name}", $user, $pass);
				break;

			case 'sqlite':
				 $conn = new PDO ("sqlite:{name}");
				break;

			case 'mssql':
				 $conn = new PDO ("mssql: host={$host}, 3306; dbname={$name}", $user, $pass);
				break;
	
		}

			// Define para o PDO lance exceções na ocorrência de erros
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			//retorna o objeto instanciado
			return $conn;
			
	}

?>



