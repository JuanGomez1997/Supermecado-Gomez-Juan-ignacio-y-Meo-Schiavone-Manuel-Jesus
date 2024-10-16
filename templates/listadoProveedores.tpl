{include file="encabezado.tpl"}
    {include file="formularioProveedores.tpl"}
    <div class="container mt-5">
        <div class="row">
            {foreach from=$proveedores item=$proveedor}
                <div class="col-md-4 mb-4">
                    <div class="card text-center card-resaltado">
                        <div class="card-body">
                            <h5 class="card-title">{$proveedor->nombre}</h5>
                            <a href="eliminarproveedor/{$proveedor->id_proveedor}" class="btn btn-outline-danger">Eliminar</a>
                            <a href="proveedoresporid/{$proveedor->id_proveedor}" class="btn btn-outline-success">Ver Productos</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
{include file="piePagina.tpl"}