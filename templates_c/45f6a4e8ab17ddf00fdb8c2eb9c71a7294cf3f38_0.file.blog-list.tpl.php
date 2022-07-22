<?php
/* Smarty version 3.1.39, created on 2021-11-28 02:09:13
  from '/Applications/XAMPP/xamppfiles/htdocs/dashboard/Pro/templates/blog-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a2d6b9684236_22726979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f6a4e8ab17ddf00fdb8c2eb9c71a7294cf3f38' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/dashboard/Pro/templates/blog-list.tpl',
      1 => 1635242164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2d6b9684236_22726979 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Data']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
<p>
<a href="blog-view.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['entry_id'];?>
">
  <h3><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</h3>
</a>

	<p align="center">
		Posted in: <?php echo $_smarty_tpl->tpl_vars['blog']->value['category'];?>
<p align="center">


	<a href="blog-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['entry_id'];?>
">Edit</a>&nbsp&nbsp
	<a href="blog-delete.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['entry_id'];?>
">Delete</a>

	</p>
    <hr />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


 
<?php }
}
