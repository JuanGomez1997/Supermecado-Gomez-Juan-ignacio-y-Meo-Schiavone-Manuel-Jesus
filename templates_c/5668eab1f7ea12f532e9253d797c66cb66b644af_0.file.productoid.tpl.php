<?php
/* Smarty version 4.2.1, created on 2024-10-20 21:06:08
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\productoid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_671554a0b389c1_77309047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5668eab1f7ea12f532e9253d797c66cb66b644af' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\productoid.tpl',
      1 => 1729448117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:formularioProductos.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_671554a0b389c1_77309047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:formularioProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->fecha_vencimiento;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
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
