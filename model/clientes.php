<?php
class Clientes
{
	private $pdo;

    public $id_clientes;
    public $nombres;
    public $apellidos;
    public $documento;
    public $celular;
    public $correo;
		public $puntos_disponibles;
		public $puntos_consumidos;

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

			$stm = $this->pdo->prepare("SELECT * FROM clientes");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_clientes)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM clientes WHERE id_clientes = ?");


			$stm->execute(array($id_clientes));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

  public function ObtenerXDocumento($documento)
  {

    try
    {
      $stm = $this->pdo
                ->prepare("SELECT * FROM clientes WHERE documento = ?");


      $stm->execute(array($documento));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

	public function Eliminar($id_clientes)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM clientes WHERE id_clientes = ?");

			$stm->execute(array($id_clientes));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE clientes SET
						nombres            = ?,
						apellidos          = ?,
            documento          = ?,
						celular            = ?,
						correo             = ?,
						puntos_disponibles = ?,
						puntos_consumidos  = ?
				    WHERE id_clientes   = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres,
                        $data->apellidos,
                        $data->documento,
                        $data->celular,
												$data->correo,
												$data->puntos_disponibles,
												$data->puntos_consumidos,
                        $data->id_clientes
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Clientes $data)
	{
		try
		{
		$sql = "INSERT INTO clientes (nombres,apellidos,documento,celular,correo,puntos_disponibles,puntos_consumidos)
		        VALUES (?, ?, ?, ?, ?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombres,
                    $data->apellidos,
                    $data->documento,
                    $data->celular,
                    $data->correo,
										$data->puntos_disponibles,
										$data->puntos_consumidos
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
