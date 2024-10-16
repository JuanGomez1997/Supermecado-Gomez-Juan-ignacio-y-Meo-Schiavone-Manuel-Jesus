<?php
/* Smarty version 4.2.1, created on 2024-10-16 02:00:15
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\listado_por_proveedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_670f020f1ba8d3_16437831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6794e7aedadc0214b3c6acf52bea85e2f62a7d15' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\listado_por_proveedor.tpl',
      1 => 1729036801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:formularioProveedores.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_670f020f1ba8d3_16437831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioProveedores.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores']->value, 'proveedor');
$_smarty_tpl->tpl_vars['proveedor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['proveedor']->value) {
$_smarty_tpl->tpl_vars['proveedor']->do_else = false;
?>
        <h2>Lista de producto por proveedor <span class="texto"><?php echo $_smarty_tpl->tpl_vars['proveedor']->value->nombre;?>
</span></h2>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Marca</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
