<?php

class ProductoController {

    public $page_title;
    public $view;
    private ProductoServicio $productoServicio;
    
    const VIEW_FOLDER='producto';

    public function __construct() {
        $this->view = self::VIEW_FOLDER.DIRECTORY_SEPARATOR.'list_producto';
        $this->page_title = '';
        $this->productoServicio = new ProductoServicio();
    }

    /* List all products */

    public function list() {
        $this->page_title = 'Listado de productos';
        return $this->productoServicio->getProductos();
    }

    public function delete(){
        if (isset($_POST["id"])){
           $exito = $this->productoServicio->delete($_POST["id"]);
           session_start();
            $_SESSION["error"]=!$exito;
            header("Location: FrontController.php?controller=Producto&action=list");
            exit;
        }
    }

}

?>