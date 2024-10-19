{include file="encabezado.tpl"}

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
                        <a href="#/{$articulo->id_producto}" class="btn btn-outline-success">Ver Productos</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>

{include file="piePagina.tpl"}