{include file="encabezado.tpl"}
    {if isset($_SESSION['id_usuario'])} 
        {include file="formularioProductos.tpl"}
    {/if}
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
            <th scope="col">Vencimiento</th>
            <th scope="col">Marca</th>
            <th scope="col">Proveedor</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$productos item=$producto}
            <tr>
            <th scope="row">{$producto->producto}</th>
            <td>{$producto->precio}</td>
            <td>{$producto->categoria}</td>
            <td>{$producto->fecha_vencimiento}</td>
            <td>{$producto->marca}</td>
            <td>{$producto->nombre}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{include file="piePagina.tpl"}