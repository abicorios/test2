<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-07-19 20:10:44
         compiled from "/home/test/sites/test2.test/design/okay_shop/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17518933945d301a75099d45-11974731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12300da4847e622fafd0ec61d0bcc8322abdfb5c' => 
    array (
      0 => '/home/test/sites/test2.test/design/okay_shop/html/cart_informer.tpl',
      1 => 1563566860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17518933945d301a75099d45-11974731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d301a750aa715_16426534',
  'variables' => 
  array (
    'cart' => 0,
    'settings' => 0,
    'currency' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d301a750aa715_16426534')) {function content_5d301a750aa715_16426534($_smarty_tpl) {?>
<div id='test_total' style='display: none'><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_price;?>
</div>
<div id='test_min' style='display: none'><?php echo $_smarty_tpl->tpl_vars['settings']->value->admin_test_min_order_sum;?>
</div>
<div id='test_txt' style='display: none'>Минимальная сумма заказа <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['settings']->value->admin_test_min_order_sum));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart" class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
         <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </a>
<?php } else { ?>
    <div class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
        <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>
<?php }?>
<?php }} ?>
