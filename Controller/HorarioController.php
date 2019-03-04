<?php
	
	public class HorarioController
	{
		public function novo($request_horario)
		{
			$horario = new Horario();

			$horario->horario_inicial = $request_horario['horario_inicial'];
			$horario->horario_final = $request_horario['horario_final'];

			$solicita_horario = new Horario();

			if($solicita_horario->save($horario))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_horario)
		{
			$horario = new Horario();

			$horario->horario_id = $request_horario['id'];
			$horario->horario_inicial = $request_horario['horario_inicial'];
			$horario->horario_final = $request_horario['horario_final'];

			$solicita_horario = new Horario();

			if($solicita_horario->edit($horario))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($horario_id)
		{
			$solicita_horario = new Horario();

			if($solicita_horario->delete($horario_id))
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
			$solicita_horario = new Horario();

			$horarios = $solicita_horario->findAll();

			return $horarios;
		}

		public function visualizarPorId($horario_id)
		{
			$solicita_horario = new Horario();

			$horarios = $solicita_horario->findById($horario_id);

			return $horarios;
		}
	}
?>