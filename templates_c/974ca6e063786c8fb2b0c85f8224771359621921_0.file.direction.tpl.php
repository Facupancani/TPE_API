<?php
/* Smarty version 3.1.47, created on 2022-11-07 19:43:39
  from 'C:\xampp\htdocs\TPE_API\templates\direction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636951db5f42e9_92185231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '974ca6e063786c8fb2b0c85f8224771359621921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_API\\templates\\direction.tpl',
      1 => 1667776261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636951db5f42e9_92185231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id='rute'>
            <img id='back' src='images/icons/arrowBack.png'/>
            <a href='#'>Atras</a>
            <a href='home' class='selectionable'>Inicio</a>
            <span>/</span>
            <a href='store/' class='selectionable'>Productos</a>
            <span>/</span>
            

        <?php if ($_smarty_tpl->tpl_vars['dispCat']->value == TRUE) {?>
            
            <a href='store/<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' class='selectionable'><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</a>
            
            <?php if ($_smarty_tpl->tpl_vars['dispType']->value == TRUE) {?>
                <span>/</span>
                <span><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</span>
            <?php }?>
            
            </div>
        <?php } else { ?>
                <a href='' class='selectionable'>Todos los productos</a>
                </div>
        <?php }
}
}
