function submitSupportForm(){
	var dfd = new $.Deferred();
	var f1 = $('#customer_name').val();
	var f2 = $('#customer_email').val();
	var f3 = $('#phone').val();
	var f4 = $('#category option:selected').val();
	var f5 = $('#customer_comment').val();
	$.ajax({
		url:"https://docs.google.com/forms/d/1Ml3QQXmoQui-C-PfkmEB4gWbqiMTd1Wsxw5mr-asc44/formResponse",
		data:{"entry.1595490074": f1, "entry.107514567" :f2, "entry.1400931591": f3, "entry.484168699": f4, "entry.1669168624": f5},
		type:"POST",
		dataType:"xml",
		statusCode:{
			0:function(){
				//show success message
				dfd.resolve();
			},
			200:function(){
				//show success message
				dfd.resolve();
			}
		}
	});
	return dfd.promise();
}
function checkFrmElements(frmElemenets, len)
{
	len = len?len:alter_len;
	var frmArr = frmElemenets.split(",");
	for(i=0; i<frmArr.length; i++)
	{
		var ele = frmArr[i];
		var frmele = $('[name="'+ele+'"]').length?$('[name="'+ele+'"]'):$('[id="+ele+"]');
		var input_head = $(frmele).closest('.'+ele+'-group');
		
		if(frmele.val().length<len || ((ele.indexOf('email')>=0) && !validate_email($(frmele).val())))
		{
			$(input_head).addClass('has-error');
			$(input_head).find('p').show();
			$(frmele).focus();
			return false;
		}
		else
		{
			$(input_head).removeClass('has-error');
			$(input_head).find('p').hide();
		}
	}
	return true;
}
function validate_email(a)
{
	a = a.trim();
	var filter = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	if(filter.test(a))
	{
		return true;
	}
	else
	{		
		return false;
	}
}
function  activate(loader,target)
{
	try
	{
      spinner.stop();
      delete spinner;
      $('#center').remove();
    }
    catch(err){}
    if(loader==1)
	{
    	if(typeof(target)!="undefined")
    	{
    		$(target).append('<div id="center" style="position:absolute;top:50%;left:50%;z-index:60000;"></div>');
    	}
    	else if($("#center").length==0)
		{
    		$("body").append('<div id="center" style="position:fixed;top:50%;left:50%;z-index:60000;"></div>');
		}
		var opts = {
			lines: 12, // The number of lines to draw
			length: 7, // The length of each line
			width: 4, // The line thickness
			radius: 10, // The radius of the inner circle
			color: '#000', // #rgb or #rrggbb
			speed: 1, // Rounds per second
			trail: 60, // Afterglow percentage
			shadow: false // Whether to render a shadow
		};
		target = document.getElementById('center');
		spinner = new Spinner(opts).spin(target);
	}
}
function showmsg(msg, type, close)
{
	var timer, s = $("#errmsg");
	clearTimeout(timer);
	if(close)
	{
		s.slideUp();
	}
	else
	{
		s.attr('class','alert nm pt-md pb-md alert-warning');
		if(msg != "")
		{
			s.slideDown().find('.msg').html(msg);
			timer = setTimeout(function(){ 
		   		s.slideUp();
			}, 10000);
		}
	}
}
function checkFormData()
{
	if(checkFrmElements('customer_name,customer_email,phone','3'))
	{
		activate(1);
		submitSupportForm().done(function(){
			showmsg('Your request was sent to the owner. You will be contacted soon.');
			$('#common-services').modal('hide');
			activate(0);
			//$('#common-modal-contact').remove();
		});
	}
}
$('body').on('hidden.bs.modal','#common-services',function(e){
	$('#common-modal-contact').remove();
});
/*spin.js file start here*/
//fgnass.github.com/spin.js#v1.2.5
(function(a,b,c){function g(a,c){var d=b.createElement(a||"div"),e;for(e in c)d[e]=c[e];return d}function h(a){for(var b=1,c=arguments.length;b<c;b++)a.appendChild(arguments[b]);return a}function j(a,b,c,d){var g=["opacity",b,~~(a*100),c,d].join("-"),h=.01+c/d*100,j=Math.max(1-(1-a)/b*(100-h),a),k=f.substring(0,f.indexOf("Animation")).toLowerCase(),l=k&&"-"+k+"-"||"";return e[g]||(i.insertRule("@"+l+"keyframes "+g+"{"+"0%{opacity:"+j+"}"+h+"%{opacity:"+a+"}"+(h+.01)+"%{opacity:1}"+(h+b)%100+"%{opacity:"+a+"}"+"100%{opacity:"+j+"}"+"}",0),e[g]=1),g}function k(a,b){var e=a.style,f,g;if(e[b]!==c)return b;b=b.charAt(0).toUpperCase()+b.slice(1);for(g=0;g<d.length;g++){f=d[g]+b;if(e[f]!==c)return f}}function l(a,b){for(var c in b)a.style[k(a,c)||c]=b[c];return a}function m(a){for(var b=1;b<arguments.length;b++){var d=arguments[b];for(var e in d)a[e]===c&&(a[e]=d[e])}return a}function n(a){var b={x:a.offsetLeft,y:a.offsetTop};while(a=a.offsetParent)b.x+=a.offsetLeft,b.y+=a.offsetTop;return b}var d=["webkit","Moz","ms","O"],e={},f,i=function(){var a=g("style");return h(b.getElementsByTagName("head")[0],a),a.sheet||a.styleSheet}(),o={lines:12,length:7,width:5,radius:10,rotate:0,color:"#000",speed:1,trail:100,opacity:.25,fps:20,zIndex:2e9,className:"spinner",top:"auto",left:"auto"},p=function q(a){if(!this.spin)return new q(a);this.opts=m(a||{},q.defaults,o)};p.defaults={},m(p.prototype,{spin:function(a){this.stop();var b=this,c=b.opts,d=b.el=l(g(0,{className:c.className}),{position:"relative",zIndex:c.zIndex}),e=c.radius+c.length+c.width,h,i;a&&(a.insertBefore(d,a.firstChild||null),i=n(a),h=n(d),l(d,{left:(c.left=="auto"?i.x-h.x+(a.offsetWidth>>1):c.left+e)+"px",top:(c.top=="auto"?i.y-h.y+(a.offsetHeight>>1):c.top+e)+"px"})),d.setAttribute("aria-role","progressbar"),b.lines(d,b.opts);if(!f){var j=0,k=c.fps,m=k/c.speed,o=(1-c.opacity)/(m*c.trail/100),p=m/c.lines;!function q(){j++;for(var a=c.lines;a;a--){var e=Math.max(1-(j+a*p)%m*o,c.opacity);b.opacity(d,c.lines-a,e,c)}b.timeout=b.el&&setTimeout(q,~~(1e3/k))}()}return b},stop:function(){var a=this.el;return a&&(clearTimeout(this.timeout),a.parentNode&&a.parentNode.removeChild(a),this.el=c),this},lines:function(a,b){function e(a,d){return l(g(),{position:"absolute",width:b.length+b.width+"px",height:b.width+"px",background:a,boxShadow:d,transformOrigin:"left",transform:"rotate("+~~(360/b.lines*c+b.rotate)+"deg) translate("+b.radius+"px"+",0)",borderRadius:(b.width>>1)+"px"})}var c=0,d;for(;c<b.lines;c++)d=l(g(),{position:"absolute",top:1+~(b.width/2)+"px",transform:b.hwaccel?"translate3d(0,0,0)":"",opacity:b.opacity,animation:f&&j(b.opacity,b.trail,c,b.lines)+" "+1/b.speed+"s linear infinite"}),b.shadow&&h(d,l(e("#000","0 0 4px #000"),{top:"2px"})),h(a,h(d,e(b.color,"0 0 1px rgba(0,0,0,.1)")));return a},opacity:function(a,b,c){b<a.childNodes.length&&(a.childNodes[b].style.opacity=c)}}),!function(){function a(a,b){return g("<"+a+' xmlns="urn:schemas-microsoft.com:vml" class="spin-vml">',b)}var b=l(g("group"),{behavior:"url(#default#VML)"});!k(b,"transform")&&b.adj?(i.addRule(".spin-vml","behavior:url(#default#VML)"),p.prototype.lines=function(b,c){function f(){return l(a("group",{coordsize:e+" "+e,coordorigin:-d+" "+ -d}),{width:e,height:e})}function k(b,e,g){h(i,h(l(f(),{rotation:360/c.lines*b+"deg",left:~~e}),h(l(a("roundrect",{arcsize:1}),{width:d,height:c.width,left:c.radius,top:-c.width>>1,filter:g}),a("fill",{color:c.color,opacity:c.opacity}),a("stroke",{opacity:0}))))}var d=c.length+c.width,e=2*d,g=-(c.width+c.length)*2+"px",i=l(f(),{position:"absolute",top:g,left:g}),j;if(c.shadow)for(j=1;j<=c.lines;j++)k(j,-2,"progid:DXImageTransform.Microsoft.Blur(pixelradius=2,makeshadow=1,shadowopacity=.3)");for(j=1;j<=c.lines;j++)k(j);return h(b,i)},p.prototype.opacity=function(a,b,c,d){var e=a.firstChild;d=d.shadow&&d.lines||0,e&&b+d<e.childNodes.length&&(e=e.childNodes[b+d],e=e&&e.firstChild,e=e&&e.firstChild,e&&(e.opacity=c))}):f=k(b,"animation")}(),a.Spinner=p})(window,document);
/*spin.js file end here*/