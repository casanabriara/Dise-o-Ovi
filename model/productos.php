<?php
class Productos
{
	private $pdo;

    public $id_productos;
		public $tipo_producto;
		public $nombre;
    public $valor_producto;
    public $descripcion;
		public $descripcion1;
		public $descripcion2;
		public $descripcion3;
		public $ruta_imagen;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM productos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_productos)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos WHERE id_pruductos = ?");


			$stm->execute(array($id_productos));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

  public function ObtenerXTipo($tipo_producto)
  {
    try
    {
      $stm = $this->pdo
                ->prepare("SELECT * FROM productos WHERE tipo_producto = ?");


      $stm->execute(array($tipo_producto));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

	public function Eliminar($id_productos)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM productos WHERE id_productos = ?");

			$stm->execute(array($id_productos));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE productos SET
						id_productos       = ?,
						tipo_producto      = ?,
            nombre             = ?,
						valor_producto     = ?,
						descripcion        = ?
				    WHERE id_productos = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_productos,
                        $data->tipo_producto,
                        $data->nombre,
                        $data->valor_producto,
												$data->descripcion,
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
