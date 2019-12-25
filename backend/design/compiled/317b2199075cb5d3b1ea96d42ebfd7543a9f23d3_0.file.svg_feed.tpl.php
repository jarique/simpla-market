<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-24 10:23:35
  from '/home/jarique/Web/Server/simpla-market.local/Okay/Modules/OkayCMS/YandexXML/Backend/design/html/svg_feed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e01cb07532348_13810226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '317b2199075cb5d3b1ea96d42ebfd7543a9f23d3' => 
    array (
      0 => '/home/jarique/Web/Server/simpla-market.local/Okay/Modules/OkayCMS/YandexXML/Backend/design/html/svg_feed.tpl',
      1 => 1577175349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e01cb07532348_13810226 (Smarty_Internal_Template $_smarty_tpl) {
?><button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okaycms__yandex_xml__add_to_yandex_feed, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_yandex fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->to__okaycms__yandex_xml) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-controller="product" data-action="to__okaycms__yandex_xml" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
    XML
</button><?php }
}
