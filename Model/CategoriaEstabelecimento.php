<?php
	
	public class CategoriaEstabelecimento
	{
		public $id;
		public $categoria_id;
		public $estabelecimento_id;

		public function save($categoria_estabelecimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert into categoria_estabelecimento values(:categoria_id,:estabelecimento_id)');

			$requisicao->bindParam(':categoria_id', $categoria_estabelecimento->categoria_id);
			$requisicao->bindParam(':estabelecimento_id', $categoria_estabelecimento->estabelecimento_id);

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

		public function edit($categoria_estabelecimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update categoria_estabelecimento set categoria_id = :categoria_id, estabelecimento_id = :estabelecimento_id where id = :id');

			$requisicao->bindParam(':categoria_id', $categoria_estabelecimento->categoria_id);
			$requisicao->bindParam(':estabelecimento_id', $categoria_estabelecimento->estabelecimento_id);
			$requisicao->bindParam(':id', $categoria_estabelecimento->id);

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

		public function delete($categoria_estabelecimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from categoria_estabelecimento where id = :id');

			$requisicao->bindParam(':id', $categoria_estabelecimento_id);

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

			$requisicao = $conecta->prepare('select * from categoria_estabelecimento');

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

		public function findById($categoria_estabelecimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from categoria_estabelecimento where id = :id');

			$requisicao->bindParam(':id', $categoria_estabelecimento_id);

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