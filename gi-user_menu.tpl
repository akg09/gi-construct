<!--File Name:gi-user_menu.tpl-->
<li class="dropdown active np mr-lg">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		<span class="greetings"> hello {$user.first_name}</span>
		<span class="myprojects"> My Property <i class="caret"></i></span>
	</a>
	<ul class="dropdown-menu nm">
		<li><a href="{$SITE_URL}?func=my_property">My Property</a></li>
		<li><a href="{$SITE_URL}myprofile.php?func=personal_info">My Profile</a></li>
		<li><a href="{$SITE_URL}login.php?func=logout" id="logout">Logout</a></li>
	</ul>
</li>