<?php
/* Smarty version 3.1.39, created on 2022-07-14 06:45:33
  from 'C:\xampp\htdocs\aman_sevilledentalclinic\aman_reasons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cf9f6de8de08_59575976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a7a79ee0044d53cdd1f93df2b77eee5577a508d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aman_sevilledentalclinic\\aman_reasons.tpl',
      1 => 1657773929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cf9f6de8de08_59575976 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    Listing reasons here :<br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Data']->value, 'reason');
$_smarty_tpl->tpl_vars['reason']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reason']->value) {
$_smarty_tpl->tpl_vars['reason']->do_else = false;
?>

<?php echo $_smarty_tpl->tpl_vars['reason']->value['reason_name'];?>


    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <?php echo $_smarty_tpl->tpl_vars['Data1']->value;?>

</div><?php }
}
