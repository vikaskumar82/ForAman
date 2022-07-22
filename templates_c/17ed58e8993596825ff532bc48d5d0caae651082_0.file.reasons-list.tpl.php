<?php
/* Smarty version 3.1.39, created on 2021-12-11 11:01:02
  from '/Applications/XAMPP/xamppfiles/htdocs/dashboard/pro/templates/reasons-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b476de872d53_99687390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17ed58e8993596825ff532bc48d5d0caae651082' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/dashboard/pro/templates/reasons-list.tpl',
      1 => 1639216860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b476de872d53_99687390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="70%" cellspacing="10px" cellpadding="10" align="center">
<tr style="height:30px; font-size:14px; background-color:#ccc" align="center">
  <th>Reason</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Data']->value, 'reason');
$_smarty_tpl->tpl_vars['reason']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reason']->value) {
$_smarty_tpl->tpl_vars['reason']->do_else = false;
?>
<tr style="background-color:#C6F0F0; font-size:15px; font-family:verdana">
<td align="center"><b><?php echo $_smarty_tpl->tpl_vars['reason']->value['reason_name'];?>
</b></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

 
<?php }
}
