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

    /* List all notes */

    public function list() {
        $this->page_title = 'Listado de productos';
        return $this->productoServicio->getProductos();
    }

}

?>