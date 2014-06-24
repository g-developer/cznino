<?php /* Smarty version Smarty-3.1.5, created on 2014-06-24 17:03:49
         compiled from "/home/bae/app/cznino/template/cznino/aa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210785890453a93e5d525741-48918250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ce4bebffd236d09d64f25f2def563615f3420f' => 
    array (
      0 => '/home/bae/app/cznino/template/cznino/aa.tpl',
      1 => 1403600622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210785890453a93e5d525741-48918250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_53a93e5d566a0',
  'variables' => 
  array (
    'about_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a93e5d566a0')) {function content_53a93e5d566a0($_smarty_tpl) {?>
        <div class="main clearfix">
            <div class="container">
               <div class="main-nav" id="main-nav">
                 <ul class="nav-tabs">
                     <li id="about_list"><a href="about?about_type=0"><i class="icon-home"></i>测试结束</a></li>
                     <li id="about_list"><a href="about?about_type=1"><i class="icon-pushpin"></i>你好啊</a></li>
                 </ul> 
               </div> 
                 <div class="indent-R">
		 	<div class="panel-main" style="width:800px;padding-left:25px;">
				<?php echo $_smarty_tpl->tpl_vars['about_content']->value;?>

		 	</div>
		 </div>
	    </div>
            </div>


<?php }} ?>