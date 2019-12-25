<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-24 10:20:06
  from '/home/jarique/Web/Server/simpla-market.local/backend/design/html/learning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e01ca36d3a9c6_41339100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a7ee0bfa6533c5b49b3c775d853457c5b117f1' => 
    array (
      0 => '/home/jarique/Web/Server/simpla-market.local/backend/design/html/learning.tpl',
      1 => 1577175349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e01ca36d3a9c6_41339100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->learning_title ,false ,32);?>

<div class="boxed boxed_learning--bg">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap_heading">
                <div class="heading_page">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->learning_welcome, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->learning_annotation, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="boxed">
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading_box"><?php echo $_smarty_tpl->tpl_vars['btr']->value->we_use_of_learning;?>
 <?php echo $_smarty_tpl->tpl_vars['progress']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['btr']->value->of_system;?>
</div>
                    <div class="progress-bar__wrap">
                        <div class='progress-bar-holder'>
                            <div class='progress-bar'>
                                <?php echo $_smarty_tpl->tpl_vars['progress']->value;?>
%
                            </div>
                        </div>
                        <form method="POST">
                            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
                            <button class="btn btn btn_small btn_blue add btn_skip_learning" name="skip_learning" value="1"><?php echo $_smarty_tpl->tpl_vars['btr']->value->skip_learning;?>
</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lessons']->value, 'lesson');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lesson']->value) {
?>

    <div class="col-md-12">
        <div class="learning_boxed">
            <div class="learning_boxed__video">
                <div class="fn_video_open learning_boxed__img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['lesson']->value->preview;?>
" class="video_open" data-video="<?php echo $_smarty_tpl->tpl_vars['lesson']->value->video;?>
" />
                    <span class="video__button">
                        <svg width="45" height="45" viewBox="0 0 68 48"><path class="video__button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video__button-icon" d="M 45,24 27,14 27,34"></path></svg>
                    </span>
                </div>
            </div>
            <div class="learning_boxed__details">
                <div class="learning_boxed__header">
                    <div class="fn_video_open" data-video="<?php echo $_smarty_tpl->tpl_vars['lesson']->value->video;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lesson']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
                <div class="learning_boxed__body">
                    <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lesson']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
                <div class="learning_boxed__footer">
                    <a class="learning_boxed__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>$_smarty_tpl->tpl_vars['lesson']->value->target_module),$_smarty_tpl ) );?>
" target="_blank">
                        <span><?php echo $_smarty_tpl->tpl_vars['lesson']->value->button;?>
</span>
                        <svg viewBox="0 0 487.958 487.958" width="20px" height="20px">
                            <path fill="currentColor" d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8
                            c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8
                            c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4
                            S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4
                            c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2
                            l180.7,149.1L272.558,375.613z"/>
                        </svg>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['lesson']->value->done) {?>
                        <div class="lesson_done_icon">
                            <svg viewBox="0 0 363.025 363.024" width="20px" height="20px">
                                <path fill="currentColor" d="M181.512,363.024C81.43,363.024,0,281.601,0,181.513C0,81.424,81.43,0,181.512,0
                                c100.083,0,181.513,81.424,181.513,181.513C363.025,281.601,281.595,363.024,181.512,363.024z M181.512,11.71
                                C87.88,11.71,11.71,87.886,11.71,181.513s76.17,169.802,169.802,169.802c93.633,0,169.803-76.175,169.803-169.802
                                S275.145,11.71,181.512,11.71z"/>
                                <polygon fill="currentColor" points="147.957,258.935 83.068,194.046 91.348,185.767 147.957,242.375 271.171,119.166
                                279.451,127.445"/>
                            </svg>
                        </div>
                    <?php } else { ?>
                    <form method="POST">
                        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
                        <input type="hidden" name="lesson_id" value="<?php echo $_smarty_tpl->tpl_vars['lesson']->value->id;?>
" />
                        <button class="btn btn_mini btn_border_dark" name="action" value="lesson_done"><?php echo $_smarty_tpl->tpl_vars['btr']->value->lesson_done;?>
</button>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<link href="design/js//loading_bar/loading-bar.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="design/js/loading_bar/loading-bar.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $(".progress-bar").each(function(){
            var percentage = parseInt($(this).html());
            if(percentage > 0){
                $(this).animate({'width':''+percentage+'%'}, 1800);
            }else{
                $(this).css({'color':'black', 'background':'none'}, 4000);
            }
        })
    })
<?php echo '</script'; ?>
>


<div id="fn_video" style="display: none;">
    <div class="video_adaptive">
        <iframe class="youtube" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>


<?php echo '<script'; ?>
>
    $('.fn_video_open').on('click', function() {
        let video = $(this).find('.video_open').data('video');
        $('iframe.youtube').attr('src', video);

        $.fancybox.open({
            src: '#fn_video'
        })
    });
<?php echo '</script'; ?>
>

<?php }
}
