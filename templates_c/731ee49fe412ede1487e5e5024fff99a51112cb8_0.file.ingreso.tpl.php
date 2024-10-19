<?php
/* Smarty version 4.2.1, created on 2024-10-19 11:03:13
  from 'D:\cosa\htdocs\web2\TPE\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\templates\ingreso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_671375d1ebe1f3_39275611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '731ee49fe412ede1487e5e5024fff99a51112cb8' => 
    array (
      0 => 'D:\\cosa\\htdocs\\web2\\TPE\\Supermecado-Gomez-Juan-ignacio-y-Meo-Schiavone-Manuel-Jesus\\templates\\ingreso.tpl',
      1 => 1729328591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
    'file:piePagina.tpl' => 1,
  ),
),false)) {
function content_671375d1ebe1f3_39275611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 div-login p-4 border rounded shadow">
        <form class="form-login" method="POST" action="accesoSesion">
            <div class="form-group">
                <label for="nombre_usuario">Nombre de Usuario</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" required>
            </div>

            <!-- Botón centrado -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark text-white">Iniciar Sesión</button>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger mt-3">
                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                </div>
            <?php }?>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:piePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
