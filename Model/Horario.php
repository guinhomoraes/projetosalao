<?php
	
	public class Horario
	{
		public $id;
		public $horario_inicial;
		public $horario_final;


		public function save($horario)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert horario values(:horario_inicial,:horario_final)');

			$requisicao->bindParam(':horario_inicial', $horario->horario_inicial);
			$requisicao->bindParam(':horario_final', $horario->horario_final);

			$status =  $requisicao->execute();

			if($status)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function edit($horario)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update horario set horario_inicial = :horario_inicial, horario_final =:horario_final where id = :id)');

			$requisicao->bindParam(':horario_inicial', $horario->horario_inicial);
			$requisicao->bindParam(':horario_final', $horario->horario_final);
			$requisicao->bindParam(':id', $horario->id);

			$status =  $requisicao->execute();

			if($status)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function delete($horario_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from horario where id = :id)');

			$requisicao->bindParam(':id', $horario_id);

			$status =  $requisicao->execute();

			if($status)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function findAll()
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from horario');

			$status =  $requisicao->execute();

			if($status)
			{
				return $requisicao->fetchAll(PDO::FETCH_ASSOC);;
			}
			else
			{
				return 0;
			}
		}

		public function findById($horario_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from horario where id = :id');

			$requisicao->bindParam(':id', $horario_id);

			$status =  $requisicao->execute();

			if($status)
			{
				return $requisicao->fetchAll(PDO::FETCH_ASSOC);;
			}
			else
			{
				return 0;
			}
		}
	}
?>