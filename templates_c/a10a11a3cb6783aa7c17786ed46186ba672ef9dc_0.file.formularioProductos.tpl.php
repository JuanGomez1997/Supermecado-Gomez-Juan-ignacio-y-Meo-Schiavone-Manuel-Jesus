<?php
/* Smarty version 4.2.1, created on 2024-10-20 21:05:35
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\formularioProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6715547f912a83_94635090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10a11a3cb6783aa7c17786ed46186ba672ef9dc' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\formularioProductos.tpl',
      1 => 1729450311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6715547f912a83_94635090 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-card">
<?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
    <h2> Agregar Producto Nuevo</h2>
    <form class="row g-3 needs-validation" method='POST' action='agregarproducto'>
    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
        <h2> Editar Producto</h2>
        <form class="row g-3 needs-validation" method='POST' action='editarproducto/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
    <?php }?>
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
</div><?php }
}
