<?php


	
	public class FuncionarioDiaController
	{
		public function novo($request_funcionario_dia)
		{
			$funcionario_dia = new FuncionarioDia();

			$funcionario_dia->funcionario_id = $request_funcionario_dia['funcionario_id'];
			$funcionario_dia->dia = $request_funcionario_dia['dia'];

			
			$solicita_funcionario_dia = new FuncionarioDia();

			if($solicita_funcionario_dia->save($funcionario_dia))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_funcionario_dia)
		{
			$funcionario_dia = new FuncionarioDia();

			$funcionario_dia->id = $request_funcionario_dia['id'];
			$funcionario_dia->funcionario_id = $request_funcionario_dia['funcionario_id'];
			$funcionario_dia->dia = $request_funcionario_dia['dia'];

			
			$solicita_funcionario_dia = new FuncionarioDia();

			if($solicita_funcionario_dia->edit($funcionario_dia))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($funcionario_dia_id)
		{
			$solicita_funcionario_dia = new FuncionarioDia();

			if($solicita_funcionario_dia->delete($funcionario_dia_id))
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
			$solicita_funcionario_dia = new FuncionarioDia();

			$funcionarios_dia = $solicita_funcionario_dia->findAll();

			return $funcionarios_dia;
		}

		public function visualizarPorId($funcionario_dia_id)
		{
			$solicita_funcionario_dia = new FuncionarioDia();

			$funcionarios_dia = $solicita_funcionario_dia->findById($funcionario_dia_id);

			return $funcionarios_dia;
		}
	}
?>