<?php
	
	public class Conexao
	{
		private $user = 'root';
		private $senha = '';


		public function conecta()
		{
			$conexao = new PDO(
			    'mysql:host=localhost;dbname=sistema_cabeleireiro', $this->user, $this->senha);
			);
			return $conexao;
		}
	}

?>