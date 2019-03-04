<?php
	
	public class Atendimento
	{
		public $id;
		public $cliente_id;
		public $funcionario_id;
		public $estabelecimento_id;
		public $funcionario_dia_id;
		public $funcionario_horario_id;
		public $data_atendimento;
		public $status_atendimento;
		public $forma_pagamento;


		public function save($atendimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('insert into atendimento values(:cliente_id,:funcionario_id,:estabelecimento_id,:funcionario_dia_id,:funcionario_horario_id,:data_atendimento,:status_atendimento,:forma_pagamento');

			$requisicao->bindParam(':cliente_id', $atendimento->cliente_id);
			$requisicao->bindParam(':funcionario_id', $atendimento->funcionario_id);
			$requisicao->bindParam(':estabelecimento_id', $atendimento->estabelecimento_id);
			$requisicao->bindParam(':funcionario_dia_id', $atendimento->funcionario_dia_id);
			$requisicao->bindParam(':funcionario_horario_id', $atendimento->funcionario_horario_id);
			$requisicao->bindParam(':data_atendimento', $atendimento->data_atendimento);
			$requisicao->bindParam(':status_atendimento', $atendimento->status_atendimento);
			$requisicao->bindParam(':forma_pagamento', $atendimento->forma_pagamento);

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

		public function edit($atendimento)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('update atendimento set cliente_id = :cliente_id, funcionario_id = :funcionario_id, estabelecimento_id = :estabelecimento_id, funcionario_dia_id = :funcionario_dia_id, funcionario_horario_id = :funcionario_horario_id, data_atendimento = :data_atendimento, status_atendimento = :status_atendimento, forma_pagamento = :forma_pagamento where id = :id');

			$requisicao->bindParam(':cliente_id', $atendimento->cliente_id);
			$requisicao->bindParam(':funcionario_id', $atendimento->funcionario_id);
			$requisicao->bindParam(':estabelecimento_id', $atendimento->estabelecimento_id);
			$requisicao->bindParam(':funcionario_dia_id', $atendimento->funcionario_dia_id);
			$requisicao->bindParam(':funcionario_horario_id', $atendimento->funcionario_horario_id);
			$requisicao->bindParam(':data_atendimento', $atendimento->data_atendimento);
			$requisicao->bindParam(':status_atendimento', $atendimento->status_atendimento);
			$requisicao->bindParam(':forma_pagamento', $atendimento->forma_pagamento);
			$requisicao->bindParam(':id', $atendimento->id);

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

		public function delete($atendimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('delete from atendimento where id = :id');

			$requisicao->bindParam(':id', $atendimento_id);

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

			$requisicao = $conecta->prepare('select * from atendimento');

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

		public function findById($atendimento_id)
		{
			$conexao = new Conexao();

			$conecta = $conexao->conecta();

			$requisicao = $conecta->prepare('select * from atendimento where id = :id');

			$requisicao->bindParam(':id', $atendimento_id);

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