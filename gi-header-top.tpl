<!--File Name:gi-header-top.tpl-->
<div class="row">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header pl-md" title="Girish Constructions">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
          		</button>
				<a class="navbar-brand home-icon mt-md nml" href="{$SITE_URL}"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar" aria-expanded="false">
				<ul class="nav navbar-nav select_pages">
					<li {if $data.func == "home"}class="active"{/if}><a href="{$SITE_URL}">Home</a></li>
					<li {if $data.func == "services"}class="active"{/if}><a href="{if $data.func == "services"}#{else}{$SITE_URL}?func=services{/if}">Services</a></li>
					<li {if $data.func == "recent_projects"}class="active"{/if}><a href="{if $data.func == "recent_projects"}#{else}{$SITE_URL}?func=recent_projects{/if}">Projects</a></li>
					<li {if $data.func == "about_us"}class="active"{/if}><a href="{if $data.func == "about_us"}#{else}{$SITE_URL}?func=about_us{/if}">About Us</a></li>
					<li {if $data.func == "support"}class="active"{/if}><a href="{if $data.func == "support"}#{else}{$SITE_URL}?func=support{/if}">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right nmr social hidden-xs">
					{if !isset($user['user_guid'])}
					<li  class="active np mr-lg" id="show_modal_login" accesskey="l"><a href="#">Sign Up/Login</a></li>
					{else}
					{include file="gi-user_menu.tpl"}
					{/if}
					<li class="social_options"><a href="https://plus.google.com/u/0/106213702050772196832/about" target="_blank" class="google"></a></li>
					<li class="social_options"><a target="_blank" href="https://www.facebook.com/pages/Girish-Constructions-and-Property-Dealers/256269554568614?ref=hl" class="facebook"></a></li>
					<li class="social_options"><a target="_blank" href="https://twitter.com/girishconstruct?lang=en" class="twitter"></a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- /.container -->
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12" id="main-page">
			