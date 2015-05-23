<?php

	$data['timer_not_allowed'] = 0;
	$data['func'] = "home";
	include_once 'site-config.php';
	$data['formmethod'] 	= "POST";
	include_once 'gi-header-functions.php';
	
	$data['curl'] = 1;
	
	$data = getUserRequest_without_decode($data);
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
	echo $theme->fetch("gi-footer.tpl");		
?>