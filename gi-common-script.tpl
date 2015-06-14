<!--File Name:gi-common-script.tpl-->
<script>
$(document).ready(function(){
	$('.common-modal').click(function(){
		activate(1);
		var name = $(this).attr('modal-name');
		$.post('{$SITE_URL}index.php?func=get_common_modal&ajax=1&modal_name='+name,function(data){
			$('body').append(data);
			$('#common-services').modal('show');
			activate(0);
		});
	});
	$('#show_modal_login').click(function(){
		activate(1);
		$.post("{$SITE_URL}index.php?func=login_modal&ajax=1",function(data){
			$('body').append(data);
			$('#login_modal').modal('show');
			activate(0);
		});
	});
});
</script>