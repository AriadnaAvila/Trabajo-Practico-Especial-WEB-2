<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 20:46:14
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\categoria_pantalones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f20286b04e38_82140626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c759bf3956c4d86a046ae3512889efd0d61320f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\categoria_pantalones.tpl',
      1 => 1708718944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65f20286b04e38_82140626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container mt-3">

        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Categoria</th>
            <th>Costo</th>
            <th>Rebaja</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaPantalones']->value, 'campo');
$_smarty_tpl->tpl_vars['campo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
$_smarty_tpl->tpl_vars['campo']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->prenda;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->categoria;?>
</td>
                    <td>$<?php echo $_smarty_tpl->tpl_vars['campo']->value->costo;?>
</td>
                    <td>%<?php echo $_smarty_tpl->tpl_vars['campo']->value->rebaja;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-success mt-2">Volver</a>
    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
