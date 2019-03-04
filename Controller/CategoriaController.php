
<?php
	
	public class CategoriaController
	{
		public function novo($request_categoria)
		{
			$categoria = new Categoria();

			$categoria->categoria = $request_categoria['categoria'];

			$solicita_categoria = new Categoria();

			if($solicita_categoria->save($categoria))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function editar($request_categoria)
		{
			$categoria = new Categoria();

			$categoria->id = $request_categoria['id'];
			$categoria->categoria = $request_categoria['categoria'];

			$solicita_categoria = new Categoria();

			if($solicita_categoria->editar($categoria))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function deletar($categoria_id)
		{
			$solicita_categoria = new Categoria();

			if($solicita_categoria->editar($categoria_id))
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
			$solicita_categoria = new Categoria();

			$categorias = $solicita_categoria->findAll();

			return $categorias;
		}

		public function visualizarPorId($categoria_id)
		{
			$solicita_categoria = new Categoria();

			$categorias = $solicita_categoria->findById($categoria_id);

			return $categorias;
		}
	}
?>