{* Cart informer (given by Ajax) *}
<div id='test_total' style='display: none'>{$cart->total_price}</div>
<div id='test_min' style='display: none'>{$settings->admin_test_min_order_sum}</div>
<div id='test_txt' style='display: none'>Минимальная сумма заказа {($settings->admin_test_min_order_sum)|convert} {$currency->sign|escape}</div>
{if $cart->total_products > 0}
    <a href="{$lang_link}cart" class="cart_info">
        <span class="cart_counter">{$cart->total_products}</span>
        <span class="cart_title" data-language="index_cart">{$lang->index_cart}</span>
         <span class="cart_total">{($cart->total_price)|convert} {$currency->sign|escape}</span>
    </a>
{else}
    <div class="cart_info">
        <span class="cart_counter">{$cart->total_products}</span>
        <span class="cart_title" data-language="index_cart">{$lang->index_cart}</span>
        <span class="cart_total">{($cart->total_price)|convert} {$currency->sign|escape}</span>
    </div>
{/if}
