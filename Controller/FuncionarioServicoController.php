<?php
	
	public class FuncionarioServicoController
	{
		public function novo($request_funcionario_servico)
		{
			$funcionario_servico = new FuncionarioServico();

			$funcionario_servico->funcionario_id = $request_funcionario_servico['funcionario_id'];
			$funcionario_servico->servico_estabelecimento_id = $request_funcionario_servico['servico_estabelecimento_id'];

			$solicita_funcionario_servico = new FuncionarioServico();

			if($solicita_funcionario_servico->save($funcionario_servico))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_funcionario_servico)
		{
			$funcionario_servico = new FuncionarioServico();

			$funcionario_servico->id = $request_funcionario_servico['id'];
			$funcionario_servico->funcionario_id = $request_funcionario_servico['funcionario_id'];
			$funcionario_servico->servico_estabelecimento_id = $request_funcionario_servico['servico_estabelecimento_id'];

			$solicita_funcionario_servico = new FuncionarioServico();

			if($solicita_funcionario_servico->edit($funcionario_servico))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($funcionario_servico_id)
		{
			$solicita_funcionario_servico = new FuncionarioServico();

			if($solicita_funcionario_servico->delete($funcionario_servico_id))
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
			$solicita_funcionario_servico = new FuncionarioServico();

			$funcionarios_servico = $solicita_funcionario_servico->findAll();

			return $funcionarios_servico;
		}

		public function visualizarPorId($funcionario_servico_id)
		{
			$solicita_funcionario_servico = new FuncionarioServico();

			$funcionarios_servico = $solicita_funcionario_servico->findById($funcionario_servico_id);

			return $funcionarios_servico
		}
	}
?>