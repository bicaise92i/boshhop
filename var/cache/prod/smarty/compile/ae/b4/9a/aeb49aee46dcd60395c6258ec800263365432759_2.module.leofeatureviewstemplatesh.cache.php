<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:55:09
  from 'module:leofeatureviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1abd37b768_05234462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb49aee46dcd60395c6258ec800263365432759' => 
    array (
      0 => 'module:leofeatureviewstemplatesh',
      1 => 1566168835,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1abd37b768_05234462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14521680755d5b1abd373ca1_20139015';
if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value) && $_smarty_tpl->tpl_vars['nbReviews']->value > 0) || $_smarty_tpl->tpl_vars['show_zero_product_review']->value) {?>

	<div class="leo-list-product-reviews" <?php if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value) && $_smarty_tpl->tpl_vars['nbReviews']->value > 0)) {?>itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"<?php }?>>
		<div class="leo-list-product-reviews-wraper">
			<div class="star_content clearfix">
				<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
						<div class="star"></div>
					<?php } else { ?>
						<div class="star star_on"></div>
					<?php }?>
				<?php
}
}
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value) && $_smarty_tpl->tpl_vars['nbReviews']->value > 0)) {?>
					<meta itemprop="worstRating" content = "0" />
					<meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round($_smarty_tpl->tpl_vars['averageTotal']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
					<meta itemprop="bestRating" content = "5" />
				<?php }?>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['nbReviews']->value) && $_smarty_tpl->tpl_vars['nbReviews']->value > 0) {?>
				<?php if ($_smarty_tpl->tpl_vars['show_number_product_review']->value) {?>
					<span class="nb-revews"><span itemprop="reviewCount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbReviews']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
				<?php } else { ?>
					<meta itemprop="reviewCount" content = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbReviews']->value, ENT_QUOTES, 'UTF-8');?>
" />
				<?php }?>
			<?php }?>
		</div>
	</div>

<?php }
}
}
