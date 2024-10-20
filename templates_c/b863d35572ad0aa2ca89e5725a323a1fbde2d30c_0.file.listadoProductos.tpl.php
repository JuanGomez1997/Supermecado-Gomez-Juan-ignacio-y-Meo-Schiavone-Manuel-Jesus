<?php
/* Smarty version 4.2.1, created on 2024-10-20 21:05:35
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6715547f81f590_17769391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b863d35572ad0aa2ca89e5725a323a1fbde2d30c' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\listadoProductos.tpl',
      1 => 1729451130,
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
function content_6715547f81f590_17769391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container mt-5">
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articulos']->value, 'articulo');
$_smarty_tpl->tpl_vars['articulo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->value) {
$_smarty_tpl->tpl_vars['articulo']->do_else = false;
?>
            <div class="col-md-4 mb-4">
                <div class="card text-center card-resaltado">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['articulo']->value->producto;?>
</h5>
                        <p class="card-text text-muted" style="font-size: 1.1em;">
                            $ <?php echo $_smarty_tpl->tpl_vars['articulo']->value->precio;?>

                        </p>
                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['id_usuario']))) {?>
                            <a href="eliminarproducto/<?php echo $_smarty_tpl->tpl_vars['articulo']->value->id_producto;?>
" class="btn btn-outline-danger">Eliminar</a>
                        <?php }?>
                        <a href="productosporid/<?php echo $_smarty_tpl->tpl_vars['articulo']->value->id_producto;?>
" class="btn btn-outline-success">Ver Producto</a>
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
