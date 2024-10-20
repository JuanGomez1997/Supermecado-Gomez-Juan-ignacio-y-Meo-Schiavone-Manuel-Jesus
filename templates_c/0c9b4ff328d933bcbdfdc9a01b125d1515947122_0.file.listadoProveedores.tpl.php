<?php
/* Smarty version 4.2.1, created on 2024-10-20 21:04:33
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\listadoProveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6715544141af55_68659024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9b4ff328d933bcbdfdc9a01b125d1515947122' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\listadoProveedores.tpl',
      1 => 1729361347,
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
function content_6715544141af55_68659024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioProveedores.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container mt-5">
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores']->value, 'proveedor');
$_smarty_tpl->tpl_vars['proveedor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['proveedor']->value) {
$_smarty_tpl->tpl_vars['proveedor']->do_else = false;
?>
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['proveedor']->value->nombre;?>
</h5>
                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
                            <a href="eliminarproveedor/<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->id_proveedor;?>
" class="btn btn-outline-danger">Eliminar</a>
                        <?php }?>
                        <a href="proveedoresporid/<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->id_proveedor;?>
" class="btn btn-outline-success">Ver Productos</a>
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
