<?php
project_css_js($fw);
$fw->include_css('user-password');
$fw->include_js('user-password');
$fw->include_css('label-placeholder');
$fw->set_canonical('/user-password');
$fw->smarty->assign('nobg',true);
$fw->smarty->display('user-password.tpl');
$fw->go();
?>