<?php

$property_type = array();
$property_type['r'] = "Residential house";
$property_type['f'] = "Residential Flat";
$property_type['c'] = "Commercial space";
$property_type['p'] = "Plot";

$property_stype = array();
$property_stype['1'] = "1 BHK";
$property_stype['2'] = "2 BHK";
$property_stype['3'] = "3 BHK";
$property_stype['4'] = "4 BHK";
$property_stype['5'] = "5 BHK";

function showThemePage($page=false)
{
	global $theme;
	echo $theme->fetch("gi-header.tpl");
	echo $theme->fetch($page);
	echo $theme->fetch("gi-footer.tpl");
}
function check_user($user)
{
	if(empty($user) && !isset($user['user_guid']))
	{
		global $data;
		$continue = "";
		$func = "&";
		//print_r($_SERVER);die;
		$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
		$continue = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$continue = "cont=".urlencode($continue);
		
		header('Location: ' . SITE_URL.'login.php/?func=show_login'.$func.$continue);
		
		exit;
	}
	return true;
}
?>