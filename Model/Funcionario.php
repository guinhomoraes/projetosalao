<?php
	
	public class Funcionario
	{
		public $id;
		public $nome;
		public $cpf;
		public $email;
		public $cargo;
		public $avaliacao;
		public $celular;
		public $telefone;
		public $senha;
		public $estabelecimento_id;

		public function save($funcionario)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert funcionario values(:nome,:cpf,:email,:cargo,:avaliacao,:celular,:telefone,:senha,:estabelecimento_id)');

			$requisicao->bindParam(':nome', $funcionario->nome);
			$requisicao->bindParam(':cpf', $funcionario->cpf);
			$requisicao->bindParam(':email',$funcionario->email);
			$requisicao->bindParam(':cargo',$funcionario->email);
			$requisicao->bindParam(':avaliacao',$funcionario->celular);
			$requisicao->bindParam(':celular',$funcionario->celular);
			$requisicao->bindParam(':telefone',$funcionario->telefone);
			$requisicao->bindParam(':senha',$funcionario->senha);
			$requisicao->bindParam(':estabelecimento_id',$funcionario->senha);

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

		public function edit($funcionario)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update funcionario set nome = :nome, cpf =:cpf, email = :email,cargo = :cargo, avaliacao = :avaliacao, celular = :celular, telefone = :telefone, senha = :senha, estabelecimento_id =:estabelecimento_id where id = :id');

			$requisicao->bindParam(':nome', $funcionario->nome);
			$requisicao->bindParam(':cpf', $funcionario->cpf);
			$requisicao->bindParam(':email',$funcionario->email);
			$requisicao->bindParam(':cargo',$funcionario->email);
			$requisicao->bindParam(':avaliacao',$funcionario->celular);
			$requisicao->bindParam(':celular',$funcionario->celular);
			$requisicao->bindParam(':telefone',$funcionario->telefone);
			$requisicao->bindParam(':senha',$funcionario->senha);
			$requisicao->bindParam(':estabelecimento_id',$funcionario->senha);
			$requisicao->bindParam(':id',$funcionario->id);

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

		public function delete($funcionario_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from funcionario where id = :id');

			$requisicao->bindParam(':id',$funcionario_id);

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

			$requisicao = $conecta->prepare('select * from funcionario');

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

		public function findById($funcionario_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from funcionario where id = :id');

			$requisicao->bindParam(':id', $funcionario_id);

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