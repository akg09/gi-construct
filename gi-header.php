<?php

include_once 'site-config.php';
include_once 'gi-user_functions.php';
include_once 'list.php';
$data['formmethod'] 	= "POST";
include_once 'gi-header-functions.php';	
$data['func'] = "";
$data = getUserRequest_without_decode($data);

$theme->assign('data',$data);
?>