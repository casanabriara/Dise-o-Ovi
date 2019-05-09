<?php
class Personal
{
	private $pdo;

    public $id_personal;
    public $nombres;
    public $apellidos;
    public $usuario;
    public $contrasena;
    public $rol;
		public $cargo;
		public $fecha_creacion;

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

			$stm = $this->pdo->prepare("SELECT * FROM personal");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_personal)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM personal WHERE id_personal = ?");


			$stm->execute(array($id_personal));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

  public function ObtenerXUsuario($usuario)
  {
    try
    {
      $stm = $this->pdo
                ->prepare("SELECT * FROM personal WHERE usuario = ?");


      $stm->execute(array($usuario));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

	public function Eliminar($id_personal)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM personal WHERE id_personal = ?");

			$stm->execute(array($id_personal));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE personal SET
						nombres           = ?,
						apellidos         = ?,
            usuario           = ?,
						rol               = ?,
						cargo             = ?
				    WHERE id_personal = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres,
                        $data->apellidos,
                        $data->usuario,
                        $data->rol,
												$data->cargo,
                        $data->id_personal
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ActualizarContrasena($data)
	{
		try
		{
			$sql = "UPDATE personal SET
						contrasena          = ?
				    WHERE id_personal = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->contrasena,
                        $data->id_personal
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Personal $data)
	{
		try
		{
		$sql = "INSERT INTO personal (nombres,apellidos,usuario,contrasena,rol,cargo,fecha_creacion)
		        VALUES (?, ?, ?, ?, ?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombres,
                    $data->apellidos,
                    $data->usuario,
                    $data->contrasena,
                    $data->rol,
										$data->cargo,
										$data->fecha_creacion
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
