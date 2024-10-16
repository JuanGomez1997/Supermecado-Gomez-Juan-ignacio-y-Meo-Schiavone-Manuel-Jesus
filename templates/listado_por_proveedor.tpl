{include file="encabezado.tpl"}
    {include file="formularioProveedores.tpl"}
    {foreach from=$proveedores item=$proveedor}
        <h3>Lista de producto por proveedor <span class="texto">{$proveedor->nombre}</span></h3>
    {/foreach}
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Marca</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$productos item=$producto}
            <tr>
            <th scope="row">{$producto->producto}</th>
            <td>{$producto->precio}</td>
            <td>{$producto->marca}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{include file="piePagina.tpl"}