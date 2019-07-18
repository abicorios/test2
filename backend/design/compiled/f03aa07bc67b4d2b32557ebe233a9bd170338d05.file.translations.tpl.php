<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-07-18 07:08:33
         compiled from "backend/design/html/translations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18198629685d301af10f7e71-56772303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f03aa07bc67b4d2b32557ebe233a9bd170338d05' => 
    array (
      0 => 'backend/design/html/translations.tpl',
      1 => 1563433388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18198629685d301af10f7e71-56772303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'settings' => 0,
    'locked_theme' => 0,
    'sort' => 0,
    'translations' => 0,
    'label' => 0,
    'translations_template' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d301af1144b71_98348594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d301af1144b71_98348594')) {function content_5d301af1144b71_98348594($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->translations_translate, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_translate, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_theme;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TranslationAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-5 col-lg-4 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>
<?php }?>


<div class="boxed fn_toggle_wrap">
    <form class="fn_form_list" method="post">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

        <div class="translation_wrap okay_list products_list fn_sort_list">
            <div class="okay_list_head">
                <div class="okay_list_heading okay_list_check">
                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                    <label class="okay_ckeckbox" for="check_all_1"></label>
                </div>
                <div class="okay_list_heading okay_list_translations_num">
                    <span>№</span>
                </div>
                <div class="okay_list_heading okay_list_translations_name">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_translation, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <a <?php if ($_smarty_tpl->tpl_vars['sort']->value=='translation'||$_smarty_tpl->tpl_vars['sort']->value=='translation_desc') {?> class="selected" <?php }?> href="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='translation') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'translation_desc'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'translation'),$_smarty_tpl);?>
<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sorts'), 0);?>
</a>
                </div>
                <div class="okay_list_heading okay_list_translations_variable">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_var, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <a <?php if ($_smarty_tpl->tpl_vars['sort']->value=='label'||$_smarty_tpl->tpl_vars['sort']->value=='label_desc'||!$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" <?php }?>href="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='label'||!$_smarty_tpl->tpl_vars['sort']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'label_desc'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>null),$_smarty_tpl);?>
<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sorts'), 0);?>
</a>
                </div>
                <div class="okay_list_heading okay_list_close"></div>
            </div>

            
            <div class="okay_list_body">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['translations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
                    <div class="fn_row okay_list_body_item fn_sort_item"<?php if (!$_smarty_tpl->tpl_vars['translations_template']->value[$_smarty_tpl->tpl_vars['label']->value]) {?> title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->translations_system_translation;?>
"<?php }?>>
                        <div class="okay_list_row ">
                            <div class="okay_list_boding okay_list_check">
                                <input class="hidden_check" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" />
                                <label class="okay_ckeckbox" for="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"></label>
                            </div>
                            <div class="okay_list_heading okay_list_translations_num">№ <?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</div>
                            <div class="okay_list_boding okay_list_translations_name">
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TranslationAdmin','id'=>$_smarty_tpl->tpl_vars['label']->value,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </div>
                            <div class="okay_list_boding  okay_list_translations_variable">
                                 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TranslationAdmin','id'=>$_smarty_tpl->tpl_vars['label']->value,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </div>
                            <div class="okay_list_boding okay_list_close">
                                <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value&&$_smarty_tpl->tpl_vars['translations_template']->value[$_smarty_tpl->tpl_vars['label']->value]) {?>
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                    </button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value) {?>
                
                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button id="apply_action" type="submit" class="btn btn_small btn_blue">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            <?php }?>
        </div>
    </form>
</div>
<?php }} ?>
