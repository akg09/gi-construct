<?php
	include('smarty/Smarty.class.php');
	$theme = new Smarty;	
	if($_SERVER["HTTP_HOST"] == "localhost" || $_SERVER["HTTP_HOST"] == "127.0.0.1")
	{
		define("SITE_URL","http://".$_SERVER["HTTP_HOST"]."/gi-construct/");//"http://".$_SERVER["HTTP_HOST"]."/");
	}
	else
	{
		define("SITE_URL","http://".$_SERVER["HTTP_HOST"]."/");//"http://".$_SERVER["HTTP_HOST"]."/");
	}
	if($_SERVER['HTTP_HOST']=="localhost")
	{
		$SERVER['is_developer'] = 1;
	}
	elseif($_SERVER['HTTP_HOST']=="www.girishconstructions.com")
	{
		$SERVER['is_developer'] = 0;
	}
	include_once '/../gi-api/index.php';
	$theme->assign('SERVER',$SERVER);
	$theme->assign('SITE_URL',SITE_URL);
	if(!isset($no_session) || $no_session==false)
	{
		//session_start();
	}
?>