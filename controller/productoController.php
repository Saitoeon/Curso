<?php

include_once("sessionController.php");
include_once("model/m_productos.php");

class productoController {

    private $userId;
    public $model;

    public function __construct() {
        //$this->userId = $userId;
        $this->model = new m_productos();

    }



    public function index()
    {

        $usuarioId = sessionController::get("usuarioId");
        $username = sessionController::get("username"); 
        require_once("views/templates/header.php");
        require_once("views/newProducto.php");
        require_once("views/templates/footer.php");
    }


    public function nuevoProducto($postData){
        var_dump($postData); exit();
        $result = array();
        //$errors = false; // $this->validaDatos($postData);

        /* if(count($errors) > 0 ){
             $message = implode("<br>", $errors);

             $result = array(
                 "status" => "error",
                 "message" => $message
             );
         }else{*/

        $sourcePath = $_FILES['imagenUrl']['tmp_name'];       // Storing source path of the file in a variable
       // $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
        //move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file

        var_dump($postData, $sourcePath); exit();
        if($this->model->nuevoProducto($postData)){
            $result = array(
                "status"=> "success",
                "message" => "Registro exitoso"
            );
        }else{
            $result = array(
                "status"=> "error"
            );
        }

        // }

        return $result;
    }



    public function getUsuario()
    {
        return $this->model->getUsuario($this->userId);
    }

    public function getAllProductos()
    {

        $usuarioId = sessionController::get("usuarioId");
        $username = sessionController::get("username"); 
        $productos = $this->model->getAllProductos();
        require_once("views/templates/header.php");
        require_once("views/productos.php");
        require_once("views/templates/footer.php");
    }


    public function updateUsuario($data)
    {
        $errors = $this->validaDatosUpdate($data);

        if(count ($errors) > 0){
            $message = implode("<br />", $errors);
            $result = array(
                "status" => "error",
                "message" => $message
            );
        }else{
            $currentUser = $this->model->getUsuario($this->userId);
            $newData = array();

            if($currentUser['nombre'] != $data['username'])
                $newData['nombre'] = $data['username'];

            if($currentUser['email'] != $data['email'])
                $newData['email'] = $data['email'];

            if($data['password'])
                if($currentUser['password'] !=
                    $data['password'])
                    $newData['password'] = $data['password'];

            if($newData){
                $this->model->updateUsuario($newData, $this->userId);
            }

            $result = array(
                "status" => "success",
                "message" => "Registro Actualizado"
            );
        }

        return $result;

    }



    public function deleteUsuario()
    {

        if(! $this->model->getUsuario($this->userId))
            return array(
                "status" => "error",
                "message" => "El usuario no existe");

        if($this->userId == sessionController::get("usuarioId")){
            return array(
                "status" => "error",
                "message" => "No se puede eliminar al usuario actual"
            );
        }

        $this->model->deleteUsuario($this->userId);
        return array(
            "status" => "success",
            "message" => "Operaci&oacute;n completada");

    }

    private function validaDatos($data){
        $errors = array();
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];
        $password_confirm = $data['password_confirm'];
        if($this->esVacio($username))
            $errors[] = "Nombre de usuario requerido";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if($this->model->getUsuarioEmail($email))
                $errors[] = "El correo ya ha sido registrado";
        }else{
            $errors[] = "Formato de correo no válido";
        }

        if($this->esVacio($password))
            $errors[] = "Password es requerido";

        if($password != $password_confirm)
            $errors[] = "Los password deben ser iguales";

        return $errors;

    }

    private function validaDatosUpdate($data){
        $id = $data['usuarioId'];
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];
        $errors = array();

        $currentUser = $this->model->getUsuario($this->userId);

        //validamos que exista el id del usuario
        if(!$currentUser){
            $errors[] = "No existe el usuario";
            return $errors;
        }

        //validamos que no exista el email en la base de datos
        $anotherUser = $this->model->getUsuarioEmail($email);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if($anotherUser && $anotherUser['id_usuario'] != $this->userId){
                $errors[] = "El correo ya ha sido registrado";
            }

        }else{
            $errors[] = "Formato de correo no válido";
        }


        if($this->esVacio($username))
            $errors[] = "Nombre de usuario requerido";

        if($password != $password_confirm)
            $errors[] = "Los password deben ser iguales";

        return $errors;

    }

    private function esVacio($in){
        if(is_array($in))
            return empty($in);
        elseif ($in == '')
            return true;
        else
            return false;
    }

} // fin de clase


if($_POST){
    $producto= new productoController();
    $producto->nuevoProducto($_POST);
}