<!--gi-footer.tpl-->
				</div>
			</div>
		</div>
	</body>
	<script>
	$(document).ready(function(){
		var msg = "{if isset($msg)}{$msg}{/if}";
		if(msg)
		{
			showmsg(msg);
		}
	});
	</script>
	<script src="{$SITE_URL}foundation/js/bootstrap{if $SERVER.is_developer<>1}.min{/if}.js"></script>
	<script src="{$SITE_URL}foundation/js/bootstrap-datepicker.min.js"></script>
	<script src="{$SITE_URL}gi-footer{if $SERVER.is_developer<>1}.min{/if}.js"></script>
</html>