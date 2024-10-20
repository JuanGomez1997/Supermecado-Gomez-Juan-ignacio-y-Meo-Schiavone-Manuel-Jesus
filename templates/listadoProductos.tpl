{include file="encabezado.tpl"}

{if isset($_SESSION['id_usuario'])}
    {include file="formularioProductos.tpl"}
{/if}

<div class="container mt-5">
    <div class="row">
        {foreach from=$articulos item=$articulo}
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title">{$articulo->producto}</h5>
                        <p class="card-text text-muted" style="font-size: 1.1em;">
                            $ {$articulo->precio}
                        </p>
                        {if isset($_SESSION['id_usuario'])}
                            <a href="eliminarproducto/{$articulo->id_producto}" class="btn btn-outline-danger">Eliminar</a>
                        {/if}
                        <a href="productosporid/{$articulo->id_producto}" class="btn btn-outline-success">Ver Producto</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>

{include file="piePagina.tpl"}