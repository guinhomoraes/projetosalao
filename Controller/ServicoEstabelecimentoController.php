<?php
	
	public class ServicoEstabelecimentoController
	{
		public function novo($request_servico_estabelecimento)
		{
			$servico_estabelecimento = new ServicoEstabelecimento();

			$servico_estabelecimento->servico = $request_servico_estabelecimento['servico'];
			$servico_estabelecimento->preco = $request_servico_estabelecimento['preco'];
			$servico_estabelecimento->tempo = $request_servico_estabelecimento['tempo'];

			$solicita_servico_estabelecimento = new ServicoEstabelecimento();

			if($solicita_servico_estabelecimento->save($servico_estabelecimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar()
		{
			$servico_estabelecimento = new ServicoEstabelecimento();

			$servico_estabelecimento->id = $request_servico_estabelecimento['id'];
			$servico_estabelecimento->servico = $request_servico_estabelecimento['servico'];
			$servico_estabelecimento->preco = $request_servico_estabelecimento['preco'];
			$servico_estabelecimento->tempo = $request_servico_estabelecimento['tempo'];

			$solicita_servico_estabelecimento = new ServicoEstabelecimento();

			if($solicita_servico_estabelecimento->edit($servico_estabelecimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($servico_estabelecimento_id)
		{
			$solicita_servico_estabelecimento = new ServicoEstabelecimento();

			if($solicita_servico_estabelecimento->delete($servico_estabelecimento_id))
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
			$solicita_servico_estabelecimento = new ServicoEstabelecimento();

			$servico_estabelecimentos = $solicita_servico_estabelecimento->findAll();

			return $servico_estabelecimentos;
		}

		public function visualizarPorId($servico_estabelecimento_id)
		{
			$solicita_servico_estabelecimento = new ServicoEstabelecimento();

			$servico_estabelecimentos = $solicita_servico_estabelecimento->findById($servico_estabelecimento_id);

			return $servico_estabelecimentos;
		}
	}
?>