<?php
	
	public class AtendimentoController
	{
		public function novo($request_atendimento)
		{
			$atendimento = new Atendimento();

			$atendimento->cliente_id = $request_atendimento['cliente_id'];
			$atendimento->funcionario_id = $request_atendimento['funcionario_id'];
			$atendimento->estabelecimento_id = $request_atendimento['estabelecimento_id'];
			$atendimento->funcionario_dia_id = $request_atendimento['funcionario_dia_id'];
			$atendimento->funcionario_horario_id = $request_atendimento['funcionario_horario_id'];
			$atendimento->data_atendimento = date('Y-m-d', strtotime($request_atendimento['data_atendimento']);
			$atendimento->status_atendimento = $request_atendimento['status_atendimento'];
			$atendimento->forma_pagamento = $request_atendimento['forma_pagamento'];

			$solicita_atendimento = new Atendimento();

			if($solicita_atendimento->save($atendimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
			
		}
		
		public function editar($request_atendimento)
		{
			$atendimento = new Atendimento();

			$atendimento->id = $request_atendimento['id'];
			$atendimento->cliente_id = $request_atendimento['cliente_id'];
			$atendimento->funcionario_id = $request_atendimento['funcionario_id'];
			$atendimento->estabelecimento_id = $request_atendimento['estabelecimento_id'];
			$atendimento->funcionario_dia_id = $request_atendimento['funcionario_dia_id'];
			$atendimento->funcionario_horario_id = $request_atendimento['funcionario_horario_id'];
			$atendimento->data_atendimento = date('Y-m-d', strtotime($request_atendimento['data_atendimento']);
			$atendimento->status_atendimento = $request_atendimento['status_atendimento'];
			$atendimento->forma_pagamento = $request_atendimento['forma_pagamento'];

			$solicita_atendimento = new Atendimento();

			if($solicita_atendimento->edit($atendimento))
			{
				return ;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($atendimento_id)
		{
			$solicita_atendimento = new Atendimento();

			if($solicita_atendimento->delete($atendimento_id))
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
			$solicita_atendimento = new Atendimento();

			$atendimentos = $solicita_atendimento->findAll();

			return $atendimentos;
		}

		public function visualizarPorId($atendimento_id)
		{
			$solicita_atendimento = new Atendimento();

			$atendimentos = $solicita_atendimento->findById($atendimento_id);

			return $atendimentos;
		}
	}
?>