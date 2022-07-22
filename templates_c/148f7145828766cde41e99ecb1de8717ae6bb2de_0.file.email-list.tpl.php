<?php
/* Smarty version 3.1.39, created on 2021-11-28 03:19:33
  from '/Applications/XAMPP/xamppfiles/htdocs/dashboard/Pro/templates/email-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a2e7350be025_76023228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148f7145828766cde41e99ecb1de8717ae6bb2de' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/dashboard/Pro/templates/email-list.tpl',
      1 => 1638065970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2e7350be025_76023228 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Data']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
<p>
<h3>Enquiry by <?php echo $_smarty_tpl->tpl_vars['blog']->value['full_name'];?>
 on <?php echo $_smarty_tpl->tpl_vars['blog']->value['preferred_day_time'];?>
</h3>

	<p align="center">
		<?php echo $_smarty_tpl->tpl_vars['blog']->value['email'];?>
<p align="center">
	</p>
   	<p align="center">
		<?php echo $_smarty_tpl->tpl_vars['blog']->value['phone'];?>
<p align="center">
	</p>

Comments:
   <p align="center">
		<?php echo $_smarty_tpl->tpl_vars['blog']->value['comments'];?>
<p align="center">
	</p>
	
    <hr />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


 
<?php }
}
