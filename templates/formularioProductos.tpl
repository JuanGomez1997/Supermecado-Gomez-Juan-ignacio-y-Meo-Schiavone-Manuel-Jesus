<div class="form-card">
{if $opcion eq 'agregar'}
    <h2> Agregar Producto Nuevo</h2>
    <form class="row g-3 needs-validation" method='POST' action='agregarproducto'>
    {elseif $opcion eq 'editar'}
        <h2> Editar Producto</h2>
        <form class="row g-3 needs-validation" method='POST' action='editarproducto/{$id}'>
    {/if}
    <div class="form-group">
      <label for="producto">Producto</label>
      <input type="text" class="form-control"  name='producto' placeholder="Nombre del producto">
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="number" class="form-control" name='precio' placeholder="Precio del producto">
    </div>
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" class="form-control"  name='categoria' placeholder="Categoria del producto">
    </div>
    <div class="form-group">
      <label for="fecha_vencimiento">Vencimiento</label>
      <input type="date" class="form-control"  name='fecha_vencimiento' placeholder="Vencimiento del producto">
    </div>
    <div class="form-group">
      <label for="marca">Marca</label>
      <input type="text" class="form-control"  name='marca' placeholder="Marca del producto">
    </div>
    <div class="form-group">
      <label for="proveedor_id">Proveedor</label>
      <input type="text" class="form-control"  name='proveedor_id' placeholder="Proveedor">
    </div>
    <div  class="col-12 text-center">
    <button type="submit" class="btn btn-outline-primary">Agregar</button>
    </div>
    </form>
</div>