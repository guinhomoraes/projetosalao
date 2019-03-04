<?php
	
	public class ServicoEstabelecimento
	{
		public $id;
		public $estabelecimento_id;
		public $servico;
		public $preco;
		public $tempo;


		public function save($servico_estabelecimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert servico_estabelecimento values(:estabelecimento_id,:servico, :preco, :tempo)');

			$requisicao->bindParam(':estabelecimento_id', $servico_estabelecimento->estabelecimento_id);
			$requisicao->bindParam(':servico', $servico_estabelecimento->servico);
			$requisicao->bindParam(':preco', $servico_estabelecimento->preco);
			$requisicao->bindParam(':tempo', $servico_estabelecimento->tempo);

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

		public function edit($servico_estabelecimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update servico_estabelecimento set estabelecimento_id = :estabelecimento_id, servico = :servico, preco = :preco, tempo = :tempo where id = :id');

			$requisicao->bindParam(':estabelecimento_id', $servico_estabelecimento->estabelecimento_id);
			$requisicao->bindParam(':servico', $servico_estabelecimento->servico);
			$requisicao->bindParam(':preco', $servico_estabelecimento->preco);
			$requisicao->bindParam(':tempo', $servico_estabelecimento->tempo);
			$requisicao->bindParam(':id', $servico_estabelecimento->id);

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

		public function delete($servico_estabelecimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from servico_estabelecimento where id = :id');

			$requisicao->bindParam(':id', $servico_estabelecimento_id);

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

			$requisicao = $conecta->prepare('select * from servico_estabelecimento');

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

		public function findById($servico_estabelecimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from servico_estabelecimento where id = :id');

			$requisicao->bindParam(':id', $servico_estabelecimento_id);

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