<?php
	
	public class FuncionarioController
	{
		public function novo($request_funcionario)
		{
			$funcionario = new Funcionario();

			$funcionario->nome = $request_funcionario['nome'];
			$funcionario->cpf = $request_funcionario['cpf'];
			$funcionario->email = $request_funcionario['email'];
			$funcionario->cargo = $request_funcionario['cargo'];
			$funcionario->celular = $request_funcionario['celular'];
			$funcionario->telefone = $request_funcionario['telefone'];
			$funcionario->senha = $request_funcionario['senha'];
			$funcionario->estabelecimento_id = $request_funcionario['estabelecimento_id'];
			
			$solicita_funcionario = new Funcionario();

			if($solicita_funcionario->save($funcionario))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_funcionario)
		{
			$funcionario = new Funcionario();

			$funcionario->id = $request_funcionario['id'];
			$funcionario->nome = $request_funcionario['nome'];
			$funcionario->cpf = $request_funcionario['cpf'];
			$funcionario->email = $request_funcionario['email'];
			$funcionario->cargo = $request_funcionario['cargo'];
			$funcionario->celular = $request_funcionario['celular'];
			$funcionario->telefone = $request_funcionario['telefone'];
			$funcionario->senha = $request_funcionario['senha'];
			$funcionario->estabelecimento_id = $request_funcionario['estabelecimento_id'];
			
			$solicita_funcionario = new Funcionario();

			if($solicita_funcionario->edit($funcionario))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($funcionario_id)
		{
			$solicita_funcionario = new Funcionario();

			if($solicita_funcionario->delete($funcionario_id))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function visualizar()
		{	
			$solicita_funcionario = new Funcionario();

			$funcionarios = $solicita_funcionario->findAll();

			return $funcionarios;
		}

		public function visualizarPorId($funcionario_id)
		{
			$solicita_funcionario = new Funcionario();

			$funcionarios = $solicita_funcionario->findById($funcionario_id);

			return $funcionarios;
		}
	}
?>