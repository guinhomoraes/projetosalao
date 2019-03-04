<?php
	
	public class Estabelecimento
	{
		public $id;
		public $nome;
		public $cnpj;
		public $cpf;
		public $endereco;
		public $numero;
		public $bairro;
		public $cidade;
		public $estado;
		public $data_abertura;
		public $data_vencimento;
		public $email;
		public $celular;
		public $telefone;
		public $senha;
		public $categoria_estabelecimento_id;
		public $avaliacao;

		public function save($estabelecimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert estabelecimento values(:nome,:cnpj,:cpf,:endereco,:numero,:bairro,:cidade,:estado,:data_abertura,:data_vencimento,:email,:celular,:telefone,:senha,:categoria_estabelecimento_id,:avaliacao)');

			$requisicao->bindParam(':nome', $estabelecimento->nome);
			$requisicao->bindParam(':cnpj', $estabelecimento->cpf);
			$requisicao->bindParam(':cpf', $estabelecimento->cpf);
			$requisicao->bindParam(':endereco', $estabelecimento->endereco);
			$requisicao->bindParam(':numero', $estabelecimento->numero);
			$requisicao->bindParam(':bairro', $estabelecimento->bairro);
			$requisicao->bindParam(':cidade', $estabelecimento->cidade);
			$requisicao->bindParam(':estado',$estabelecimento->estado);
			$requisicao->bindParam(':data_abertura',$estabelecimento->estado);
			$requisicao->bindParam(':data_vencimento',$estabelecimento->estado);
			$requisicao->bindParam(':email',$estabelecimento->email);
			$requisicao->bindParam(':celular',$estabelecimento->celular);
			$requisicao->bindParam(':telefone',$estabelecimento->telefone);
			$requisicao->bindParam(':senha',$estabelecimento->senha);
			$requisicao->bindParam(':categoria_estabelecimento_id',$estabelecimento->senha);
			$requisicao->bindParam(':avaliacao',$estabelecimento->senha);

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

		public function edit($estabelecimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update estabelecimento set nome = :nome, cnpj = :cnpj,cpf = :cpf, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, data_abertura = :data_abertura, data_vencimento = :data_vencimento, email = :email, celular =:celular, telefone = :telefone, senha = :senha, categoria_estabelecimento_id = :categoria_estabelecimento_id, avaliacao = :avaliacao where id = :id');

			$requisicao->bindParam(':nome', $estabelecimento->nome);
			$requisicao->bindParam(':cnpj', $estabelecimento->cpf);
			$requisicao->bindParam(':cpf', $estabelecimento->cpf);
			$requisicao->bindParam(':endereco', $estabelecimento->endereco);
			$requisicao->bindParam(':numero', $estabelecimento->numero);
			$requisicao->bindParam(':bairro', $estabelecimento->bairro);
			$requisicao->bindParam(':cidade', $estabelecimento->cidade);
			$requisicao->bindParam(':estado',$estabelecimento->estado);
			$requisicao->bindParam(':data_abertura',$estabelecimento->estado);
			$requisicao->bindParam(':data_vencimento',$estabelecimento->estado);
			$requisicao->bindParam(':email',$estabelecimento->email);
			$requisicao->bindParam(':celular',$estabelecimento->celular);
			$requisicao->bindParam(':telefone',$estabelecimento->telefone);
			$requisicao->bindParam(':senha',$estabelecimento->senha);
			$requisicao->bindParam(':categoria_estabelecimento_id',$estabelecimento->senha);
			$requisicao->bindParam(':avaliacao',$estabelecimento->senha);
			$requisicao->bindParam(':id',$estabelecimento->id);

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

		public function delete($estabelecimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from estabelecimento where id = :id');

			$requisicao->bindParam(':id',$estabelecimento_id);

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

			$requisicao = $conecta->prepare('select * from estabelecimento');

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

		public function findById($estabelecimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from estabelecimento where id = :id');

			$requisicao->bindParam(':id', $estabelecimento_id);

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