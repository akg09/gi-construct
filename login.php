<?php
	include_once 'gi-header.php';
	$data['show_in_page'] = 1;
	if($data['func'] == "signup")
	{
		$where = array();
		$where['email'] = $data['email'];
		$user = getAPIDataJ("get_user",$where);
		if(is_array($user[0]) && $user[0]['email'] == $data['email'])
		{
			return -1;
		}
		$new_user = getAPIDataJ("set_user",$data);
	}
	if($data['func'] == "show_login")
	{
		$theme->assign('data',$data);
		showThemePage("gi-modal-login.tpl");
	}
	if($data['func'] == "login")
	{
		$where = array();
		$where['email'] = $data['email'];
		$new_user = getAPIDataJ("get_user",$where);
		if(!empty($new_user[0]) && $new_user[0]['user_guid'] <> "")
		{
			if($new_user[0]['password'] == $data['password'])
			{
				$_SESSION['gi_user'] = $user = $new_user[0];
				$url = SITE_URL.'?func=my_property';
				header('Location:'.$url);
			}
			else
			{
				$msg = "The credentials you supplied were not correct. Please try again.";
				$theme->assign('msg',$msg);
				$theme->assign('data',$data);
				showThemePage("gi-modal-login.tpl");
			}
		}
		else
		{
			$msg = "This email id is not registered with us. Please sign up with this email address.";
			$theme->assign('msg',$msg);
			$theme->assign('data',$data);
			showThemePage("gi-modal-signup.tpl");
		}
		exit;
	}
	if($data['func'] == "logout")
	{
		$_SESSION['gi_user'] = $user = array();
		session_destroy();
		header('Location:'.SITE_URL);
	}
	$theme->assign('data',$data);
	showThemePage("gi-modal-signup.tpl");
?>