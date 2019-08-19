<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:55:13
  from '/var/www/html/Bosshopping/modules/leobootstrapmenu/views/widgets/widget_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1ac1738510_67224734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a47962dcff390885188e65d7355a5754842adfc' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/leobootstrapmenu/views/widgets/widget_html.tpl',
      1 => 1566168835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1ac1738510_67224734 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }
}
}
