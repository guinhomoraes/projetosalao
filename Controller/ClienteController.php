<?php
	
	public class ClienteController
	{
		public function novo($request_cliente)
		{
			$cliente = new Cliente();

			$cliente->nome = $request_cliente['nome'];
			$cliente->cpf = $request_cliente['cpf'];
			$cliente->endereco = $request_cliente['endereco'];
			$cliente->numero = $request_cliente['numero'];
			$cliente->bairro = $request_cliente['bairro'];
			$cliente->cidade = $request_cliente['cidade'];
			$cliente->estado = $request_cliente['estado'];
			$cliente->sexo = $request_cliente['sexo'];
			$cliente->email = $request_cliente['email'];
			$cliente->celular = $request_cliente['celular'];
			$cliente->telefone = $request_cliente['telefone'];
			$cliente->senha = $request_cliente['senha'];
			

			$solicita_cliente = new Cliente();

			if($solicita_cliente->save($cliente))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_cliente)
		{
			$cliente = new Cliente();

			$cliente->id = $request_cliente['id'];
			$cliente->nome = $request_cliente['nome'];
			$cliente->cpf = $request_cliente['cpf'];
			$cliente->endereco = $request_cliente['endereco'];
			$cliente->numero = $request_cliente['numero'];
			$cliente->bairro = $request_cliente['bairro'];
			$cliente->cidade = $request_cliente['cidade'];
			$cliente->estado = $request_cliente['estado'];
			$cliente->sexo = $request_cliente['sexo'];
			$cliente->email = $request_cliente['email'];
			$cliente->celular = $request_cliente['celular'];
			$cliente->telefone = $request_cliente['telefone'];
			$cliente->senha = $request_cliente['senha'];
			

			$solicita_cliente = new Cliente();

			if($solicita_cliente->edit($cliente))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($cliente_id)
		{

			$solicita_cliente = new Cliente();

			if($solicita_cliente->delete($cliente_id))
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
			$solicita_cliente = new Cliente();

			$clientes = $solicita_cliente->findAll();

			return $clientes;
		}

		public function visualizarPorId($cliente_id)
		{
			$solicita_cliente = new Cliente();

			$clientes = $solicita_cliente->findById($cliente_id);

			return $clientes;
		}
	}
?>