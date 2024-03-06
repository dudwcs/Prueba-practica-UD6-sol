<div class="row">
    <div class="col-md-12 text-right">
      
    </div>
    <?php if (count($dataToView["data"]) > 0) : ?>

        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Nombre</th>
                    <th scope="col">Nombre_corto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">PVP</th>
                    <th scope="col">Familia</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataToView["data"] as $producto) { ?>
                    <tr>
                        <td><?= $producto->getNombre() ?></td>
                        <td><?=$producto->getFamilia();
                      
                      ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    <?php endif;
    
    if(count($dataToView["data"])===0):?>
        
        <div class="alert alert-info">
            Actualmente no existen productos.
        </div>
        <?php
    endif;
    ?>
</div>