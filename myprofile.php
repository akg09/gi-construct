<?php
include_once 'gi-header.php';

check_user($user);

if($data['func'] == "personal_info")
{
	$months = array('Jan','Feb','Mar','Apr','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$theme->assign('months',$months);
	$theme->assign('data',$data);
	$theme->assign('user',$user);
	showThemePage("gi-myprofile.tpl");
}
?>