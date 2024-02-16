<?php



/**
 * Description of UsuarioRepository
 *
 * @author wadmin
 */
class UsuarioRepository extends BaseRepository implements IUsuarioRepository{
   

    public function __construct() {
        parent::__construct();
        $this->table_name = "usuario";
        $this->pk_name = "id";
        $this->class_name = "Usuario";
        $this->default_order_column = "email";
    }
    

    public function findUsuarioByEmail($email): Usuario{
        $pdostmt = $this->conn->prepare("SELECT * FROM $this->table_name "
        . "WHERE email = :email");
    $pdostmt->bindValue("email", $email);
    $pdostmt->execute();

    //Llama al constructor después de establecer las propiedades. No usa los métodos setters
    $object = $pdostmt->fetchObject($this->class_name);

    return $object;
    }


  


    //TO DO
     public function create($object){return null;}
     public function update($object): bool{return false;}
}
