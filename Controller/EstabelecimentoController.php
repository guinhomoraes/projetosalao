<?php
	
	public class EstabelecimentoController
	{
		public function novo($request_estabelecimento)
		{
			$estabelecimento = new Estabelecimento();

			$estabelecimento->nome = $request_estabelecimento['nome'];
			$estabelecimento->cnpj = $request_estabelecimento['cnpj'];
			$estabelecimento->cpf = $request_estabelecimento['cpf'];
			$estabelecimento->endereco = $request_estabelecimento['endereco'];
			$estabelecimento->numero = $request_estabelecimento['numero'];
			$estabelecimento->bairro = $request_estabelecimento['bairro'];
			$estabelecimento->cidade = $request_estabelecimento['cidade'];
			$estabelecimento->estado = $request_estabelecimento['estado'];
			$estabelecimento->sexo = $request_estabelecimento['sexo'];
			$estabelecimento->data_abertura = $request_estabelecimento['data_abertura'];
			$estabelecimento->data_vencimento = $request_estabelecimento['data_vencimento'];
			$estabelecimento->email = $request_estabelecimento['email'];
			$estabelecimento->celular = $request_estabelecimento['celular'];
			$estabelecimento->telefone = $request_estabelecimento['telefone'];
			$estabelecimento->senha = $request_estabelecimento['senha'];
			$estabelecimento->categoria_estabelecimento_id = $request_estabelecimento['categoria_estabelecimento_id'];
			$estabelecimento->avaliacao = $request_estabelecimento['avaliacao'];

			
			$solicita_estabelecimento = new Estabelecimento();

			if($solicita_estabelecimento->save($estabelecimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_estabelecimento)
		{
			$estabelecimento = new Estabelecimento();

			$estabelecimento->id = $request_estabelecimento['id'];
			$estabelecimento->nome = $request_estabelecimento['nome'];
			$estabelecimento->cnpj = $request_estabelecimento['cnpj'];
			$estabelecimento->cpf = $request_estabelecimento['cpf'];
			$estabelecimento->endereco = $request_estabelecimento['endereco'];
			$estabelecimento->numero = $request_estabelecimento['numero'];
			$estabelecimento->bairro = $request_estabelecimento['bairro'];
			$estabelecimento->cidade = $request_estabelecimento['cidade'];
			$estabelecimento->estado = $request_estabelecimento['estado'];
			$estabelecimento->sexo = $request_estabelecimento['sexo'];
			$estabelecimento->data_abertura = $request_estabelecimento['data_abertura'];
			$estabelecimento->data_vencimento = $request_estabelecimento['data_vencimento'];
			$estabelecimento->email = $request_estabelecimento['email'];
			$estabelecimento->celular = $request_estabelecimento['celular'];
			$estabelecimento->telefone = $request_estabelecimento['telefone'];
			$estabelecimento->senha = $request_estabelecimento['senha'];
			$estabelecimento->categoria_estabelecimento_id = $request_estabelecimento['categoria_estabelecimento_id'];
			$estabelecimento->avaliacao = $request_estabelecimento['avaliacao'];

			
			$solicita_estabelecimento = new Estabelecimento();

			if($solicita_estabelecimento->edit($estabelecimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($estabelecimento_id)
		{
			$solicita_estabelecimento = new Estabelecimento();

			if($solicita_estabelecimento->delete($estabelecimento_id))
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
			$solicita_estabelecimento = new Estabelecimento();

			$estabelecimentos = $solicita_estabelecimento->findAll();

			return $estabelecimentos;
		}

		public function visualizarPorId($estabelecimento_id)
		{
			$solicita_estabelecimento = new Estabelecimento();

			$estabelecimentos = $solicita_estabelecimento->findById($estabelecimento_id);

			return $estabelecimentos;
		}
	}
?>