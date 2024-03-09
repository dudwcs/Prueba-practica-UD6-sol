<?php

class ProductoServicio {


    private IProductoRepository $productoRepository;


    public function __construct() {
        $this->productoRepository = new ProductoRepository();
     
    }

    /* Get all products */

    public function getProductos(): array {

        $productos = $this->productoRepository->findAll();      

        return $productos;
    }

    public function delete(int $id): bool{
        return $this->productoRepository->delete($id);
    }

  
}

?>