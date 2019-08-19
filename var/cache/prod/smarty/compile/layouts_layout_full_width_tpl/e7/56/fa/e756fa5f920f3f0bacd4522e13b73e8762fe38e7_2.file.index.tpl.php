<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:55:12
  from '/var/www/html/Bosshopping/themes/leo_nunica/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1ac0df6ea4_72713124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e756fa5f920f3f0bacd4522e13b73e8762fe38e7' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/templates/index.tpl',
      1 => 1566168835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1ac0df6ea4_72713124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14116796755d5b1ac0df53e4_43959478', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_6757575875d5b1ac0df57e7_91386023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15763900515d5b1ac0df60e1_18490728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11690804015d5b1ac0df5da1_70667353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15763900515d5b1ac0df60e1_18490728', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14116796755d5b1ac0df53e4_43959478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14116796755d5b1ac0df53e4_43959478',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6757575875d5b1ac0df57e7_91386023',
  ),
  'page_content' => 
  array (
    0 => 'Block_11690804015d5b1ac0df5da1_70667353',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15763900515d5b1ac0df60e1_18490728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6757575875d5b1ac0df57e7_91386023', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11690804015d5b1ac0df5da1_70667353', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
