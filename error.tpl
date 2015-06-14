<!-- File Name: 'error.tpl' -->
<div id="errmsg" class="alert alert-warning nm pt-md pb-md h{if isset($msg) && is_array($msg)} hide{/if}">
	<button type="button" class="close" onclick="javascript:showmsg('','',1);">&times;</button>
	<span class="msg">{if isset($error) || isset($data.msg) || isset($msg)}{$error}{$data.msg}{$msg}{/if}</span>
</div>