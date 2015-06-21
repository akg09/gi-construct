<?php

	include_once 'gi-header.php';
	
	$func = $action = "";
	if(isset($data['action']) && $data['action'] <> "")
	{
		$action = strtolower($data['action']);
	}
	if(isset($data['func']) && $data['func'] <> "")
	{
		$func = strtolower($data['func']);
	}
	else
	{
		$data['func'] = "home";
	}
	if($data['func'] == "get_common_modal" && $data['ajax'] == 1)
	{
		$theme->assign('data',$data);
		echo $theme->fetch('common-services-modal.tpl');
		exit;
	}
	if($data['func'] == "login_modal" && $data['ajax'] == 1)
	{
		$theme->assign('data',$data);
		echo $theme->fetch("gi-modal-login.tpl");
		exit;
	}
	$theme->assign('data',$data);
	
	if($data['func'] == "home" && !$action)
	{
		showThemePage('main-page.tpl');
	}
	if($data['func'] == "services")
	{
		showThemePage('gi-services.tpl');
	}
	if($data['func'] == "recent_projects")
	{
		showThemePage('gi-projects.tpl');
	}
	if($data['func'] == "about_us")
	{
		showThemePage('gi-about_us.tpl');
	}
	if($data['func'] == "support")
	{
		if($action == "submit_user_request")
		{
			$data['msg'] = "success";
			$theme->assign('$data',$data);
			$msg = $theme->fetch("gi-support_email.tpl");
			$status = @send_email("GirishConstructions:Thank you for your feedback",$msg,$data['customer_email']);
			showThemePage('gi-support_response.tpl');
		}
		showThemePage('gi-support.tpl');
	}
	if($data['func'] == "contact")
	{
		showThemePage('gi-contact.tpl');
	}
	check_user($user);
	if($data['func'] == "my_property")
	{
		$where = array();
		$where['user_guid'] = $user['user_guid'];
		//$property = getAPIDataJ("my_property_list",$where);
		showThemePage('gi-my_property_list.tpl');
	}		
?>