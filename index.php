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
	echo $theme->fetch("gi-header.tpl");
	if($data['func'] == "home" && !$action)
	{
		echo $theme->fetch("main-page.tpl");
	}
	if($data['func'] == "services")
	{
		echo $theme->fetch("gi-services.tpl");
	}
	if($data['func'] == "recent_projects")
	{
		echo $theme->fetch("gi-projects.tpl");
	}
	if($data['func'] == "about_us")
	{
		echo $theme->fetch("gi-about_us.tpl");
	}
	if($data['func'] == "support")
	{
		if($action == "submit_user_request")
		{
			$data['msg'] = "success";
			$theme->assign('$data',$data);
			$msg = $theme->fetch("gi-support_email.tpl");
			$status = @send_email("GirishConstructions:Thank you for your feedback",$msg,$data['customer_email']);
			echo $theme->fetch('gi-support_response.tpl');
			exit;
		}
		echo $theme->fetch("gi-support.tpl");
	}
	if($data['func'] == "contact")
	{
		echo $theme->fetch("gi-contact.tpl");
	}
	if($data['func'] == "my_property")
	{
		$where = array();
		$where['user_guid'] = $user['user_guid'];
		//$property = getAPIDataJ("my_property_list",$where);
		echo $theme->fetch("gi-my_property_list.tpl");
	}
	echo $theme->fetch("gi-footer.tpl");		
?>