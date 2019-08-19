<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:55:12
  from '/var/www/html/Bosshopping/themes/leo_nunica/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1ac0dfc4e9_54965191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca427c8cb17a7cd13c297e7c11827cd284ccd116' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/templates/page.tpl',
      1 => 1566168835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1ac0dfc4e9_54965191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16708506815d5b1ac0df9525_29655765', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_21210112005d5b1ac0df9d32_28636813 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10989774885d5b1ac0df98d6_67249294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21210112005d5b1ac0df9d32_28636813', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_164473725d5b1ac0dfad13_29920029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_6537176315d5b1ac0dfb1e6_90603665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16956609485d5b1ac0dfa9b9_85666455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164473725d5b1ac0dfad13_29920029', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6537176315d5b1ac0dfb1e6_90603665', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16022464055d5b1ac0dfbc56_90848010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4661696105d5b1ac0dfb921_03692038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16022464055d5b1ac0dfbc56_90848010', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16708506815d5b1ac0df9525_29655765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16708506815d5b1ac0df9525_29655765',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10989774885d5b1ac0df98d6_67249294',
  ),
  'page_title' => 
  array (
    0 => 'Block_21210112005d5b1ac0df9d32_28636813',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16956609485d5b1ac0dfa9b9_85666455',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_164473725d5b1ac0dfad13_29920029',
  ),
  'page_content' => 
  array (
    0 => 'Block_6537176315d5b1ac0dfb1e6_90603665',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4661696105d5b1ac0dfb921_03692038',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16022464055d5b1ac0dfbc56_90848010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10989774885d5b1ac0df98d6_67249294', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16956609485d5b1ac0dfa9b9_85666455', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4661696105d5b1ac0dfb921_03692038', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
