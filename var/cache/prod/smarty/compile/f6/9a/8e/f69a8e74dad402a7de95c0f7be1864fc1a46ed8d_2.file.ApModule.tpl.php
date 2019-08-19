<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:55:08
  from '/var/www/html/Bosshopping/modules/appagebuilder/views/templates/hook/ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1abc68a186_18853056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f69a8e74dad402a7de95c0f7be1864fc1a46ed8d' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1566168835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1abc68a186_18853056 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
