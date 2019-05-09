<?php
class Carrito
{
	private $pdo;

    public $id_carrito;
		public $id_clientes;
		public $id_productos;
    public $nombre_producto;
    public $cantidad;
    public $valor_unitario;

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

	public function Listar($id_clientes)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT p.id_pruductos productoId, c.id_carrito carritoId, p.nombre productoNombre,c.cantidad carritoCantidad,p.valor_producto productoValor FROM carrito c inner join productos p on p.id_pruductos = c.id_productos where c.id_clientes = ? ");
			$stm->execute(array($id_clientes));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_carrito)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM carrito WHERE id_carrito = ?");


			$stm->execute(array($id_carrito));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

  public function ObtenerXCliente($id_clientes)
  {
    try
    {
      $stm = $this->pdo
                ->prepare("SELECT * FROM carrito WHERE id_clientes = ?");


      $stm->execute(array($id_clientes));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

	public function ObtenerXClienteProducto($id_clientes,$id_productos)
  {

    try
    {
      $stm = $this->pdo
                ->prepare("SELECT * FROM carrito WHERE id_clientes = ? and id_productos = ?");

      $stm->execute(array($id_clientes,$id_productos));
      return $stm->fetch(PDO::FETCH_OBJ);
    }
		 catch (Exception $e)
    {
      die($e->getMessage());

    }
  }

	public function Eliminar($id_carrito)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM carrito WHERE id_carrito = ?");

			$stm->execute(array($id_carrito));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE carrito SET
						id_clientes          = ?,
						id_productos         = ?,
            cantidad             = ?
				    WHERE id_carrito = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_clientes,
                        $data->id_productos,
                        $data->cantidad,
                        $data->id_carrito
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try
		{
		$sql = "INSERT INTO carrito (id_clientes,id_productos,cantidad)
		        VALUES (?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_clientes,
										$data->id_productos,
										$data->cantidad,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
