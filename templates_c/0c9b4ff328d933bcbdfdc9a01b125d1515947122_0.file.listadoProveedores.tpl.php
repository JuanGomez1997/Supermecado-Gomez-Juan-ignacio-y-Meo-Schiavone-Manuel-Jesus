<?php
/* Smarty version 4.2.1, created on 2024-10-14 20:10:56
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\listadoProveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_670d5eb0d2b344_35989953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9b4ff328d933bcbdfdc9a01b125d1515947122' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\listadoProveedores.tpl',
      1 => 1728929454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_670d5eb0d2b344_35989953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container mt-5">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores']->value, 'proveedor');
$_smarty_tpl->tpl_vars['proveedor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['proveedor']->value) {
$_smarty_tpl->tpl_vars['proveedor']->do_else = false;
?>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['proveedor']->value->nombre;?>
</h5>
                            <a href="editar_proveedor.php?id=<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->id_proveedor;?>
" class="btn btn-primary">Editar</a>
                            <a href="eliminar_proveedor.php?id=<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->id_proveedor;?>
" class="btn btn-danger">Eliminar</a>
                            <a href="eliminar_proveedor.php?id=<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->id_proveedor;?>
" class="btn btn-success">Ver Productos</a>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
