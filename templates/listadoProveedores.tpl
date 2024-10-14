{include file="encabezado.tpl"}
    <div class="container mt-5">
        <div class="row">
            {foreach from=$proveedores item=$proveedor}
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">{$proveedor->nombre}</h5>
                            <a href="editar_proveedor.php?id={$proveedor->id_proveedor}" class="btn btn-primary">Editar</a>
                            <a href="eliminar_proveedor.php?id={$proveedor->id_proveedor}" class="btn btn-danger">Eliminar</a>
                            <a href="eliminar_proveedor.php?id={$proveedor->id_proveedor}" class="btn btn-success">Ver Productos</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
{include file="piePagina.tpl"}