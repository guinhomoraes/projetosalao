<?php
	
	public class FuncionarioServico
	{
		public $id;
		public $funcionario_id;
		public $servico_estabelecimento_id;


		public function save($funcionario_servico)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert funcionario_servico values(:funcionario_id,:servico_estabelecimento_id)');

			$requisicao->bindParam(':funcionario_id', $funcionario_servico->funcionario_id);
			$requisicao->bindParam(':servico_estabelecimento_id', $funcionario_servico->servico_estabelecimento_id);

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

		public function edit($funcionario_servico)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update funcionario_servico set funcionario_id = :funcionario_id, servico_estabelecimento_id = :servico_estabelecimento_id where id = :id');

			$requisicao->bindParam(':funcionario_id', $funcionario_servico->funcionario_id);
			$requisicao->bindParam(':servico_estabelecimento_id', $funcionario_servico->servico_estabelecimento_id);
			$requisicao->bindParam(':id', $funcionario_servico->id);

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

		public function delete($funcionario_servico_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from funcionario_servico where id = :id');

			$requisicao->bindParam(':id', $funcionario_servico_id);

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

			$requisicao = $conecta->prepare('select * from funcionario_servico');

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

		public function findById($funcionario_servico_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from funcionario_servico where id = :id');

			$requisicao->bindParam(':id', $funcionario_servico_id);

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