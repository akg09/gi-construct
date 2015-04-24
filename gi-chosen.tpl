<!-- File Name: 'gi-chosen.tpl' -->
<script src="{$SITE_URL}foundation/js/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="{$SITE_URL}foundation/css/chosen.min.css">
<script>
	$(document).ready(function(){
		$('.chosen').chosen({width: "100%",allow_single_deselect:true});
	});
</script>
<style>
.chosen-container-single .chosen-single abbr:hover
{
	background-position: -42px -10px;
}
.chosen-container-single .chosen-single abbr
{
	top:11px;
	background:url({$SITE_THEME_URL}foundation/css/images/chosen-sprite.png) -42px 1px no-repeat;
}
.chosen-results .disabled-result.result-selected
{
	background-color: #FFF!important;
	color: #CCC!important;
}
select.chosen + .chosen-container.chosen-container-single .chosen-single {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    background-image:none;
}

select.chosen + .chosen-container.chosen-container-single .chosen-single div {
    top:4px;
    color:#000;
}

select.chosen + .chosen-container .chosen-drop {
    background-color: #FFF;
    border: 1px solid #CCC;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    background-clip: padding-box;
    margin: 2px 0 0;

}

select.chosen + .chosen-container .chosen-search input[type=text] {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #FFF;
    border: 1px solid #CCC;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    background-image:none;
}

select.chosen + .chosen-container .chosen-results {
    margin: 2px 0 0;
    padding: 5px 0;
    font-size: 14px;
    list-style: none;
    background-color: #fff;
    margin-bottom: 5px;
}

select.chosen + .chosen-container .chosen-results li , 
select.chosen + .chosen-container .chosen-results li.active-result {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.428571429;
    color: #333;
    background-image:none;
}
select.chosen + .chosen-container .chosen-results li:hover, 
select.chosen + .chosen-container .chosen-results li.active-result:hover,
select.chosen + .chosen-container .chosen-results li.highlighted
{
    color: #FFF;
    text-decoration: none;
    background-color: #428BCA;
    background-image:none;
}

select.chosen + .chosen-container-multi .chosen-choices {
    display: block;
    width: 100%;
    min-height: 34px;
    padding: 3px 6px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #FFF;
    border: 1px solid #CCC;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    background-image:none;
}

select.chosen + .chosen-container-multi .chosen-choices li.search-field input[type="text"] {
    height:auto;
    padding:4px 0;
}

select.chosen + .chosen-container-multi .chosen-choices li.search-choice {

    background-image: none;
    padding: 3px 24px 3px 5px;
    margin: 0 6px 0 0;
    font-size: 12px;
    font-weight: normal;
    line-height: 1.428571429;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #333;
    background-color: #FFF;
    border-color: #CCC;
}

select.chosen + .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
    top:6px;
    right:6px;
}

select.chosen + .chosen-container-multi.chosen-container-active .chosen-choices,
select.chosen + .chosen-container.chosen-container-single.chosen-container-active .chosen-single,
select.chosen + .chosen-container .chosen-search input[type=text]:focus{
    border-color: #66AFE9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),0 0 8px rgba(102, 175, 233, 0.6);
}

select.chosen + .chosen-container-multi .chosen-results li.result-selected{
    display: list-item;
    color: #ccc;
    cursor: default;
    background-color: white;
}
select.chosen.input-sm + .chosen-container.chosen-container-single .chosen-single div{top:1px}
select.chosen.input-sm + .chosen-container.chosen-container-single .chosen-single{height:30px}
select.chosen.input-sm + .chosen-container.chosen-container-single .chosen-single{padding:4px 12px}
select.chosen.input-sm + .chosen-container-single .chosen-single abbr{top:9px}
</style>