<?php
/* Smarty version 4.2.1, created on 2024-10-16 09:34:14
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\formularioProveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_670f6c76b1eb86_60773545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7f5aefffadca502a47674b4b6cc9f7771e17542' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\formularioProveedores.tpl',
      1 => 1729064034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f6c76b1eb86_60773545 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="container text-center">
        <div class="form-card">
            <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                <h2>Agregue Proveedor Nuevo</h2>
                <form class="row g-3 needs-validation" novalidate method="post" action="agregarproveedor">
            <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                <h2>Editar Proveedor Existente</h2>
                <form class="row g-3 needs-validation" novalidate method="post" action="editarproveedor/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <?php }?>
                <div class="col-md-4 mx-auto"> 
                    <?php if ($_smarty_tpl->tpl_vars['opcion']->value == 'agregar') {?>
                        <label for="validationCustom01" class="form-label">Ingrese:</label>
                    <?php } elseif ($_smarty_tpl->tpl_vars['opcion']->value == 'editar') {?>
                        <label for="validationCustom01" class="form-label">Ingrese:</label>
                    <?php }?>
                    <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
                </div>
                <div class="col-12 text-center"> 
                    <button class="btn btn-outline-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php }
}
