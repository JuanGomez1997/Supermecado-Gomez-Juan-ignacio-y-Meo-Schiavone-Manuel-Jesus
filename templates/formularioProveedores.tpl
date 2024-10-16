<div>
    <div class="container text-center">
        <div class="form-card">
            {if $opcion eq 'agregar'}
                <h2>Agregue Proveedor Nuevo</h2>
                <form class="row g-3 needs-validation" novalidate method="post" action="agregarproveedor">
            {elseif $opcion eq 'editar'}
                <h2>Editar Proveedor Existente</h2>
                <form class="row g-3 needs-validation" novalidate method="post" action="editarproveedor/{$id}">
            {/if}
                <div class="col-md-4 mx-auto"> 
                    {if $opcion eq 'agregar'}
                        <label for="validationCustom01" class="form-label">Ingrese:</label>
                    {elseif $opcion eq 'editar'}
                        <label for="validationCustom01" class="form-label">Ingrese:</label>
                    {/if}
                    <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
                </div>
                <div class="col-12 text-center"> 
                    <button class="btn btn-outline-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>


