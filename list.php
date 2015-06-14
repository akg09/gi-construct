<?php

function showThemePage($page=false)
{
	global $theme;
	echo $theme->fetch("gi-header.tpl");
	echo $theme->fetch($page);
	echo $theme->fetch("gi-footer.tpl");}
?>