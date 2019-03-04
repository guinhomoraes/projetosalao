<?php
	
	public class CategoriaEstabelecimentoController
	{
		public function novo($request_categoria_estabelecimento)
		{
			$categoria_estabelecimento = new CategoriaEstabelecimento();

			$categoria_estabelecimento->categoria_id = $request_categoria_estabelecimento['categoria_id'];
			$categoria_estabelecimento->estabelecimento_id = $request_categoria_estabelecimento['estabelecimento_id'];

			$solicita_categoria_estabelecimento = new CategoriaEstabelecimento();

			if($solicita_categoria_estabelecimento->save($categoria_estabelecimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_categoria_estabelecimento)
		{
			$categoria_estabelecimento = new CategoriaEstabelecimento();

			$categoria_estabelecimento->id = $request_categoria_estabelecimento['id'];
			$categoria_estabelecimento->categoria_id = $request_categoria_estabelecimento['categoria_id'];
			$categoria_estabelecimento->estabelecimento_id = $request_categoria_estabelecimento['estabelecimento_id'];

			$solicita_categoria_estabelecimento = new CategoriaEstabelecimento();

			if($solicita_categoria_estabelecimento->edit($categoria_estabelecimento))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($categoria_estabelecimento_id)
		{
			$solicita_categoria_estabelecimento = new CategoriaEstabelecimento();

			if($solicita_categoria_estabelecimento->delete($categoria_estabelecimento_id))
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
			$solicita_categoria_estabelecimento = new CategoriaEstabelecimento();

			$categorias_estabelecimento = $solicita_categoria_estabelecimento->findAll();

			return $categorias_estabelecimento;
		}

		public function visualizarPorId($categoria_estabelecimento_id)
		{
			$solicita_categoria_estabelecimento = new CategoriaEstabelecimento();

			$categorias_estabelecimento = $solicita_categoria_estabelecimento->findById($categoria_estabelecimento_id);

			return $categorias_estabelecimento;
		}
	}
?>