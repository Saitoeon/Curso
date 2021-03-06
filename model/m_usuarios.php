
<?php
require_once("config/database.php");

class m_usuarios{

    private $db = null;

    public function __construct(){             
        $this->db = Database::getInstance();
    }

    /**
    * Obtiene un usuario por id
    * @param userId - El id del usuario
    * @return Los datos del usuario en caso de éxito, null en caso contrario
    **/
    public function getUsuario($userId) 
    {
        $result = $this->db->select(
                    "SELECT * FROM usuarios WHERE id_usuario = :id",
                    array ("id" => $userId)
                  );
        if ( count($result) > 0 )
            return $result[0];
        else
            return null;
    }

    /**
    * Obtiene un usuario por correo electrónico.
    * 
    **/
    public function getUsuarioEmail($email){
        $result = $this->db->select(
            "SELECT * FROM cliente WHERE email = :email",
            array("email" => $email));

        if($result){
            return $result[0];
        }else{
            return null;
        }

    }

    /**
    * Guarda un nuevo usuario
    * @param Arreglo con los datos del usuario
    * @return true si logra guardar los datos
    **/
    
    public function nuevoUsuario($data)
    {             
        return $this->db->insert('cliente',  array (
            'nombre'         => $data['nombre'], 
            'apellidoPat'    => $data['apellidoPat'],
            'apellidoMat'    => $data['apellidoMat'],
            'email'          => $data['email'],
            'usuario'          => $data['user'],
            'pass'       => $data['pass']
        ));
              
    }

    /**
    * Actualiza los datos de un usuario
    * @param Arreglo con los datos a actualizar
    * @param userId - El id del usuario 
    * @return true si logra actualizar
    **/
    public function updateUsuario($updateData, $userId)
    {    
        $this->db->update("usuarios", 
                    $updateData, 
                    "id_usuario = :id",
                    array( "id" => $userId )
               );

        return true;
    }

    /**
    * Elimina a un usuario
    * @param userId - el id del usuario a eliminar
    * @return true si logra insertarlo
    **/
    public function deleteUsuario($userId)  /// update Estado = eliminado
    {    
        $this->db->delete("usuarios", "id_usuario = :id", array( "id" => $userId ));        
        
        return true;
    }

    /**
    * Obtiene todos los usuarios de la base de datos
    **/
    public function getAllUsers(){
        $query = "SELECT * from usuarios ORDER BY id_usuario DESC";
        $result = $this->db->select($query, array());
        if(count($result)>0)
            return $result;
        else
            return null;
    }
}

?>
