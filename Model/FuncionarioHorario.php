<?php
	
	public class FuncionarioHorario
	{
		public $id;
		public $funcionario_id;
		public $horario_id;


		public function save($funcionario_horario)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert funcionario_horario values(:funcionario_id,:horario_id)');

			$requisicao->bindParam(':funcionario_id', $funcionario_horario->funcionario_id);
			$requisicao->bindParam(':horario_id', $funcionario_horario->horario_id);

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

		public function edit($funcionario_horario)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update funcionario_horario set funcionario_id = :funcionario_id, horario_id = :horario_id where id = :id');

			$requisicao->bindParam(':funcionario_id', $funcionario_horario->funcionario_id);
			$requisicao->bindParam(':horario_id', $funcionario_horario->horario_id);
			$requisicao->bindParam(':id', $funcionario_horario->id);


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

		public function delete($funcionario_horario_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from funcionario_horario id = :id');

			$requisicao->bindParam(':id', $funcionario_horario_id);


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

			$requisicao = $conecta->prepare('select * from funcionario_horario');

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

		public function findById($funcionario_horario_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from funcionario_horario where id = :id');

			$requisicao->bindParam(':id', $funcionario_horario_id);

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