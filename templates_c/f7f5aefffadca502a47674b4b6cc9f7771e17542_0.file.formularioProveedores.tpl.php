<?php
/* Smarty version 4.2.1, created on 2024-10-15 19:58:32
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\formularioProveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_670ead482aee50_56948518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7f5aefffadca502a47674b4b6cc9f7771e17542' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\formularioProveedores.tpl',
      1 => 1729015111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670ead482aee50_56948518 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div class="container text-center">
        <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
            <h1>Agregue Proveedor Nuevo</h1>
            <form class="row g-3 needs-validation" novalidate method="post" action="agregarproveedor">
        <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
            <h1>Editar Proveedor Existente</h1>
            <form class="row g-3 needs-validation" novalidate method="post" action="editarproveedor/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php }?>
            <div class="col-md-4 mx-auto"> 
                <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                    <label for="validationCustom01" class="form-label">Ingrese:</label>
                <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                    <h1>Edite Proveedor Existente</h1>
                    <label for="validationCustom01" class="form-label">Ingrese:</label>
                <?php }?>
                <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
            </div>
            <div class="col-12 text-center"> 
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>


<?php }
}
