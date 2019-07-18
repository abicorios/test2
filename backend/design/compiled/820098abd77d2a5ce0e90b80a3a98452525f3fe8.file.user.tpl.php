<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-07-18 07:10:36
         compiled from "backend/design/html/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7690964915d301b6c7fde92-28695968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '820098abd77d2a5ce0e90b80a3a98452525f3fe8' => 
    array (
      0 => 'backend/design/html/user.tpl',
      1 => 1563433388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7690964915d301b6c7fde92-28695968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'btr' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_id' => 0,
    'groups' => 0,
    'g' => 0,
    'orders' => 0,
    'order' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d301b6c86d7a9_18371384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d301b6c86d7a9_18371384')) {function content_5d301b6c86d7a9_18371384($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_user, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='login_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_already_registered, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_name, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_email') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_email, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data" class="clearfix">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_options, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-1">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="">
                                    <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                    <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_phone, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="">
                                    <input class="form-control mb-h" name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                    <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_adress, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="">
                                    <input name="address" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->address, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_registration_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="">
                                    <input name="" class="form-control" type="text" disabled value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['user']->value->created);?>
" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-1">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="">
                                    <select name="group_id" class="selectpicker">
                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_not_in_group, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==$_smarty_tpl->tpl_vars['g']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="heading_label">E-mail</div>
                                <div class="">
                                    <input name="email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                             <div class="mb-1">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_last_ip, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="">
                                    <input name="" class="form-control" type="text" disabled value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_ip, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <div class="row">
        <div class="col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_orders, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="">
                        <div class="okay_list products_list">
                            <div class="okay_list_head">
                                <div class="okay_list_heading okay_list_user_number">№ </div>
                                <div class="okay_list_heading okay_list_user_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="okay_list_heading okay_list_user_date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="okay_list_heading okay_list_user_price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_order_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            </div>
                            <div class="okay_list_body">
                                <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                                    <div class="fn_row okay_list_body_item">
                                        <div class="okay_list_row">
                                            <div class="okay_list_boding okay_list_user_number">
                                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->tpl_vars['order']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_order_number, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                                            </div>
                                            <div class="okay_list_boding okay_list_user_name">
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->note) {?>
                                                    <div class="note"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->note, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>
                                                    <div class="order_paid">
                                                        <span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <div class="okay_list_boding okay_list_user_date">
                                                <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 | <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</div>
                                            </div>

                                            <div class="okay_list_boding okay_list_user_price">
                                                <div class="input-group">
                                                    <span class="form-control">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->total_price, ENT_QUOTES, 'UTF-8', true);?>

                                                    </span>
                                                    <span class="input-group-addon">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
    <div class="row">
       <div class="col-lg-12 col-md-12 mb-2">
            <button type="submit" class="btn btn_small btn_blue float-md-right">
                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
        </div>
    </div>
</form>
<?php }} ?>
