{include file="encabezado.tpl"}
<div>
    <div class="container text-center">
        <form class="row g-3 needs-validation" novalidate method="post" action="">
            <div class="col-md-4 mx-auto"> 
                {if $opcion eq 'agregar'}
                    <h1>Agregue Proveedor Nuevo</h1>
                    <label for="validationCustom01" class="form-label">Proveeedor nuevo:</label>
                {elseif $opcion eq 'editar'}
                    <h1>Edite Proveedor Existente</h1>
                    <label for="validationCustom01" class="form-label">Editar Proveeedor:</label>
                {/if}
                <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
            </div>
            <div class="col-12 text-center"> 
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
{include file="piePagina.tpl"}