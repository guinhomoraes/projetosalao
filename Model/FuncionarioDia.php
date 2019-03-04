<?php
	
	public class FuncionarioDia
	{
		public $id;
		public $funcionario_id;
		public $dia;

		public function save($funcionario_dia)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert funcionario_dia values(:funcionario_id,:dia)');

			$requisicao->bindParam(':funcionario_id', $funcionario_dia->funcionario_id);
			$requisicao->bindParam(':dia', $funcionario_dia->dia);

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

		public function edit($funcionario_dia)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update funcionario_dia set funcionario_id = :funcionario_id, dia = :dia where id = :id');

			$requisicao->bindParam(':funcionario_id', $funcionario_dia->funcionario_id);
			$requisicao->bindParam(':dia', $funcionario_dia->dia);
			$requisicao->bindParam(':id', $funcionario_dia->id);

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

		public function delete($funcionario_dia_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from funcionario_dia where id = :id)');

			$requisicao->bindParam(':id', $funcionario_dia_id);

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

			$requisicao = $conecta->prepare('select * from funcionario_dia');

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

		public function findById($funcionario_dia_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from funcionario_dia where id = :id');

			$requisicao->bindParam(':id', $funcionario_dia_id);

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