<?php
	
	public class Cliente
	{
		public $id;
		public $nome;
		public $cpf;
		public $endereco;
		public $numero;
		public $bairro;
		public $cidade;
		public $estado;
		public $sexo;
		public $email;
		public $celular;
		public $telefone;
		public $senha;

		public function save($cliente)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert cliente values(:nome,:cpf,:endereco,:numero,:bairro,:cidade,:estado,:sexo,:email,:celular,:telefone,:senha)');

			$requisicao->bindParam(':nome', $cliente->nome);
			$requisicao->bindParam(':cpf', $cliente->cpf);
			$requisicao->bindParam(':endereco', $cliente->endereco);
			$requisicao->bindParam(':numero', $cliente->numero);
			$requisicao->bindParam(':bairro', $cliente->bairro);
			$requisicao->bindParam(':cidade', $cliente->cidade);
			$requisicao->bindParam(':estado',$cliente->estado);
			$requisicao->bindParam(':sexo',$cliente->sexo);
			$requisicao->bindParam(':email',$cliente->email);
			$requisicao->bindParam(':celular',$cliente->celular);
			$requisicao->bindParam(':telefone',$cliente->telefone);
			$requisicao->bindParam(':senha',$cliente->senha);

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

		public function edit($cliente)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update cliente set nome = :nome, cpf = :cpf, endereco =:endereco,numero = :numero, bairro = :bairro,cidade = :cidade,estado = :estado,sexo = :sexo,email = :email,celular = :celular,telefone = :telefone,senha = :senha where id = :id');

			$requisicao->bindParam(':nome', $cliente->nome);
			$requisicao->bindParam(':cpf', $cliente->cpf);
			$requisicao->bindParam(':endereco', $cliente->endereco);
			$requisicao->bindParam(':numero', $cliente->numero);
			$requisicao->bindParam(':bairro', $cliente->bairro);
			$requisicao->bindParam(':cidade', $cliente->cidade);
			$requisicao->bindParam(':estado',$cliente->estado);
			$requisicao->bindParam(':sexo',$cliente->sexo);
			$requisicao->bindParam(':email',$cliente->email);
			$requisicao->bindParam(':celular',$cliente->celular);
			$requisicao->bindParam(':telefone',$cliente->telefone);
			$requisicao->bindParam(':senha',$cliente->senha);
			$requisicao->bindParam(':id',$cliente->id);

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

		public function delete($cliente_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from cliente where id = :id');

			$requisicao->bindParam(':id',$cliente_id);

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

			$requisicao = $conecta->prepare('select * from cliente');

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

		public function findById($cliente_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from cliente where id = :id');

			$requisicao->bindParam(':id', $cliente_id);

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