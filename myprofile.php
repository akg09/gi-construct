<?php
include_once 'gi-header.php';

check_user($user);

if($data['func'] == "personal_info")
{
	$months = array('Jan','Feb','Mar','Apr','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$theme->assign('months',$months);
	if(isset($data['action']) && $data['action'] == "save_profile")
	{
		$data['user_guid'] = $user['user_guid'];
		$ret = getAPIDataJ("set_user",$data);
		$user = $ret[0];
	}
	$theme->assign('data',$data);
	$theme->assign('user',$user);
	showThemePage("gi-myprofile.tpl");
}
?>