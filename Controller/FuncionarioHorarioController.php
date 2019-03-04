<?php
	
	public class FuncionarioHorarioController
	{
		public function novo($request_funcionario_horario)
		{
			$funcionario_horario = new FuncionarioHorario();

			$funcionario_horario->funcionario_id = $request_funcionario_horario['funcionario_id'];
			$funcionario_horario->horario_id = $request_funcionario_horario['horario_id'];

			$solicita_funcionario_horario = new FuncionarioHorario();

			if($solicita_funcionario_horario->save($funcionario_horario))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_funcionario_horario)
		{
			$funcionario_horario = new FuncionarioHorario();

			$funcionario_horario->id = $request_funcionario_horario['id'];
			$funcionario_horario->funcionario_id = $request_funcionario_horario['funcionario_id'];
			$funcionario_horario->horario_id = $request_funcionario_horario['horario_id'];

			$solicita_funcionario_horario = new FuncionarioHorario();

			if($solicita_funcionario_horario->edit($funcionario_horario))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($funcionario_horario_id)
		{
			$solicita_funcionario_horario = new FuncionarioHorario();

			if($solicita_funcionario_horario->delete($funcionario_horario_id))
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
			$solicita_funcionario_horario = new FuncionarioHorario();

			$funcionarios_horario = $solicita_funcionario_horario->findAll();

			return $funcionarios_horario;
		}

		public function visualizarPorId($funcionario_horario_id)
		{
			$solicita_funcionario_horario = new FuncionarioHorario();

			$funcionarios_horario = $solicita_funcionario_horario->findById($funcionario_horario_id);

			return $funcionarios_horario;
		}
	}
?>