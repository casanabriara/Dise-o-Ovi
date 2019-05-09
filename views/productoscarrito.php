<?php
class productoscarrito
{
	private $pdo;

    public $id_prodcarrito;
    public $nombre_producto;
    public $cantidad;
    public $valor_unitario;
    public $valor_total;
		public $fecha_compra;

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

			$stm = $this->pdo->prepare("SELECT * FROM productos_carrito");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_prodcarrito)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos_carrito WHERE id_prodcarrito = ?");


			$stm->execute(array($id_prodcarrito));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

  public function ObtenerXUsuario($nombre_producto)
  {
    try
    {
      $stm = $this->pdo
                ->prepare("SELECT * FROM productos_carrito WHERE id_prodcarrito = ?");


      $stm->execute(array($nombre_producto));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

	public function Eliminar($id_prodcarrito)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM productos_carrito WHERE id_prodcarrito = ?");

			$stm->execute(array($id_prodcarrito));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE productos_carrito SET
						nombre_producto           = ?,
						cantidad         = ?,
            valor_unitario           = ?,
						valor_total               = ?,
				    WHERE id_productos_carrito = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre_producto,
                        $data->cantidad,
                        $data->valor_unitario,
                        $data->valor_total
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
