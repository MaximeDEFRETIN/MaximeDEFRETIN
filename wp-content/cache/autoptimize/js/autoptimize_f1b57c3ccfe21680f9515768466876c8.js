try{window._wpemojiSettings={"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/maximedefretin\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);}catch(e){}
try{function member_widget_click_handler(){jQuery(".widget div#members-list-options a").on("click",function(){var e=this;return jQuery(e).addClass("loading"),jQuery(".widget div#members-list-options a").removeClass("selected"),jQuery(this).addClass("selected"),jQuery.post(ajaxurl,{action:"widget_members",cookie:encodeURIComponent(document.cookie),_wpnonce:jQuery("input#_wpnonce-members").val(),"max-members":jQuery("input#members_widget_max").val(),filter:jQuery(this).attr("id")},function(t){jQuery(e).removeClass("loading"),member_widget_response(t)}),!1})}function member_widget_response(e){e=e.substr(0,e.length-1),"-1"!==(e=e.split("[[SPLIT]]"))[0]?jQuery(".widget ul#members-list").fadeOut(200,function(){jQuery(".widget ul#members-list").html(e[1]),jQuery(".widget ul#members-list").fadeIn(200)}):jQuery(".widget ul#members-list").fadeOut(200,function(){var t="<p>"+e[1]+"</p>";jQuery(".widget ul#members-list").html(t),jQuery(".widget ul#members-list").fadeIn(200)})}jQuery(document).ready(function(){member_widget_click_handler(),"undefined"!=typeof wp&&wp.customize&&wp.customize.selectiveRefresh&&wp.customize.selectiveRefresh.bind("partial-content-rendered",function(){member_widget_click_handler()})});}catch(e){}
try{function bp_get_querystring(n){var t=location.search.split(n+"=")[1];return t?decodeURIComponent(t.split("&")[0]):null};}catch(e){}
try{!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(e){function n(e){return u.raw?e:encodeURIComponent(e)}function o(e){return u.raw?e:decodeURIComponent(e)}function i(e){return n(u.json?JSON.stringify(e):String(e))}function r(e){0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return e=decodeURIComponent(e.replace(c," ")),u.json?JSON.parse(e):e}catch(e){}}function t(n,o){var i=u.raw?n:r(n);return e.isFunction(o)?o(i):i}var c=/\+/g,u=e.cookie=function(r,c,f){if(void 0!==c&&!e.isFunction(c)){if("number"==typeof(f=e.extend({},u.defaults,f)).expires){var a=f.expires,d=f.expires=new Date;d.setTime(+d+864e5*a)}return document.cookie=[n(r),"=",i(c),f.expires?"; expires="+f.expires.toUTCString():"",f.path?"; path="+f.path:"",f.domain?"; domain="+f.domain:"",f.secure?"; secure":""].join("")}for(var p=r?void 0:{},s=document.cookie?document.cookie.split("; "):[],m=0,x=s.length;m<x;m++){var v=s[m].split("="),k=o(v.shift()),l=v.join("=");if(r&&r===k){p=t(l,c);break}r||void 0===(l=t(l))||(p[k]=l)}return p};u.defaults={},e.removeCookie=function(n,o){return void 0!==e.cookie(n)&&(e.cookie(n,"",e.extend({},o,{expires:-1})),!e.cookie(n))}});}catch(e){}
try{!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(e){function t(t){return e.isFunction(t)||"object"==typeof t?t:{top:t,left:t}}var n=e.scrollTo=function(t,n,o){return e(window).scrollTo(t,n,o)};return n.defaults={axis:"xy",duration:parseFloat(e.fn.jquery)>=1.3?0:1,limit:!0},n.window=function(){return e(window)._scrollable()},e.fn._scrollable=function(){return this.map(function(){var t=this;if(!(!t.nodeName||-1!==e.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"])))return t;var n=(t.contentWindow||t).document||t.ownerDocument||t;return/webkit/i.test(navigator.userAgent)||"BackCompat"===n.compatMode?n.body:n.documentElement})},e.fn.scrollTo=function(o,r,i){return"object"==typeof r&&(i=r,r=0),"function"==typeof i&&(i={onAfter:i}),"max"===o&&(o=9e9),i=e.extend({},n.defaults,i),r=r||i.duration,i.queue=i.queue&&i.axis.length>1,i.queue&&(r/=2),i.offset=t(i.offset),i.over=t(i.over),this._scrollable().each(function(){function s(e){u.animate(l,r,i.easing,e&&function(){e.call(this,c,i)})}if(null!==o){var a,f=this,u=e(f),c=o,l={},d=u.is("html,body");switch(typeof c){case"number":case"string":if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(c)){c=t(c);break}if(!(c=d?e(c):e(c,this)).length)return;case"object":(c.is||c.style)&&(a=(c=e(c)).offset())}var m=e.isFunction(i.offset)&&i.offset(f,c)||i.offset;e.each(i.axis.split(""),function(e,t){var o="x"===t?"Left":"Top",r=o.toLowerCase(),h="scroll"+o,p=f[h],y=n.max(f,t);if(a)l[h]=a[r]+(d?0:p-u.offset()[r]),i.margin&&(l[h]-=parseInt(c.css("margin"+o))||0,l[h]-=parseInt(c.css("border"+o+"Width"))||0),l[h]+=m[r]||0,i.over[r]&&(l[h]+=c["x"===t?"width":"height"]()*i.over[r]);else{var b=c[r];l[h]=b.slice&&"%"===b.slice(-1)?parseFloat(b)/100*y:b}i.limit&&/^\d+$/.test(l[h])&&(l[h]=l[h]<=0?0:Math.min(l[h],y)),!e&&i.queue&&(p!==l[h]&&s(i.onAfterFirst),delete l[h])}),s(i.onAfter)}}).end()},n.max=function(t,n){var o="x"===n?"Width":"Height",r="scroll"+o;if(!e(t).is("html,body"))return t[r]-e(t)[o.toLowerCase()]();var i="client"+o,s=t.ownerDocument.documentElement,a=t.ownerDocument.body;return Math.max(s[r],a[r])-Math.min(s[i],a[i])},n});}catch(e){}
try{var ajaxurl='http://maximedefretin/wp-admin/admin-ajax.php';}catch(e){}
try{var _paq=window._paq=window._paq||[];_paq.push(['trackPageView']);_paq.push(['enableLinkTracking']);_paq.push(['alwaysUseSendBeacon']);_paq.push(['setTrackerUrl',"\/\/maximedefretin\/wp-content\/plugins\/matomo\/app\/matomo.php"]);_paq.push(['setSiteId','1']);var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];g.type='text/javascript';g.async=true;g.src="\/\/maximedefretin\/wp-content\/uploads\/matomo\/matomo.js";s.parentNode.insertBefore(g,s);}catch(e){}
try{/*! This file is auto-generated */
!function(e,t){if("function"==typeof define&&define.amd)define("hoverintent",["module"],t);else if("undefined"!=typeof exports)t(module);else{var n={exports:{}};t(n),e.hoverintent=n.exports}}(this,function(e){"use strict";var t=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e};e.exports=function(e,n,o){function i(e,t){return y&&(y=clearTimeout(y)),b=0,p?void 0:o.call(e,t)}function r(e){m=e.clientX,d=e.clientY}function u(e,t){if(y&&(y=clearTimeout(y)),Math.abs(h-m)+Math.abs(E-d)<x.sensitivity)return b=1,p?void 0:n.call(e,t);h=m,E=d,y=setTimeout(function(){u(e,t)},x.interval)}function s(t){return L=!0,y&&(y=clearTimeout(y)),e.removeEventListener("mousemove",r,!1),1!==b&&(h=t.clientX,E=t.clientY,e.addEventListener("mousemove",r,!1),y=setTimeout(function(){u(e,t)},x.interval)),this}function c(t){return L=!1,y&&(y=clearTimeout(y)),e.removeEventListener("mousemove",r,!1),1===b&&(y=setTimeout(function(){i(e,t)},x.timeout)),this}function v(t){L||(p=!0,n.call(e,t))}function a(t){!L&&p&&(p=!1,o.call(e,t))}function f(){e.addEventListener("focus",v,!1),e.addEventListener("blur",a,!1)}function l(){e.removeEventListener("focus",v,!1),e.removeEventListener("blur",a,!1)}var m,d,h,E,L=!1,p=!1,T={},b=0,y=0,x={sensitivity:7,interval:100,timeout:0,handleFocus:!1};return T.options=function(e){var n=e.handleFocus!==x.handleFocus;return x=t({},x,e),n&&(x.handleFocus?f():l()),T},T.remove=function(){e&&(e.removeEventListener("mouseover",s,!1),e.removeEventListener("mouseout",c,!1),l())},e&&(e.addEventListener("mouseover",s,!1),e.addEventListener("mouseout",c,!1)),T}});}catch(e){}
try{window.wp=window.wp||{},window.bp=window.bp||{},function(e,t){"undefined"!=typeof BP_Nouveau&&(bp.Nouveau={start:function(){this.setupGlobals(),this.prepareDocument(),this.initObjects(),this.setHeartBeat(),this.addListeners()},setupGlobals:function(){this.ajax_request=null,this.objects=t.map(BP_Nouveau.objects,function(e){return e}),this.objectNavParent=BP_Nouveau.object_nav_parent,this.heartbeat=wp.heartbeat||{},this.querystring=this.getLinkParams()},prepareDocument:function(){if(t("body").hasClass("no-js")&&t("body").removeClass("no-js").addClass("js"),BP_Nouveau.warnings&&"undefined"!=typeof console&&console.warn&&t.each(BP_Nouveau.warnings,function(e,t){console.warn(t)}),t(".buddypress_object_nav .widget-title").length){var e=t(".buddypress_object_nav .widget-title").html();t("body").find('*:contains("'+e+'")').each(function(a,s){t(s).hasClass("widget-title")||e!==t(s).html()||t(s).is("a")||t(s).remove()})}},getStorage:function(e,t){var a=sessionStorage.getItem(e);return a=a?JSON.parse(a):{},void 0!==t?a[t]||!1:a},setStorage:function(e,t,a){var s=this.getStorage(e);return void 0===a&&void 0!==s[t]?delete s[t]:s[t]=a,sessionStorage.setItem(e,JSON.stringify(s)),null!==sessionStorage.getItem(e)},getLinkParams:function(e,t){var a;if(!(a=e?-1!==e.indexOf("?")?"?"+e.split("?")[1]:"":document.location.search))return null;var s=a.replace(/(^\?)/,"").split("&").map(function(e){return e=e.split("="),this[e[0]]=e[1],this}.bind({}))[0];return t?s[t]:s},urlDecode:function(e,t){var a=t||{amp:"&",lt:"<",gt:">",quot:'"',"#039":"'"};return decodeURIComponent(e.replace(/\+/g," ")).replace(/&([^;]+);/g,function(e,t){return a[t]||""})},ajax:function(e,a){this.ajax_request&&this.ajax_request.abort();var s=t.extend({},bp.Nouveau.getStorage("bp-"+a),{nonce:BP_Nouveau.nonces[a]},e);return void 0!==BP_Nouveau.customizer_settings&&(s.customized=BP_Nouveau.customizer_settings),this.ajax_request=t.post(BP_Nouveau.ajaxurl,s,"json"),this.ajax_request},inject:function(e,a,s){t(e).length&&a&&("append"===(s=s||"reset")?t(e).append(a):"prepend"===s?t(e).prepend(a):t(e).html(a),"undefined"==typeof bp_mentions&&void 0===bp.mentions||t(".bp-suggestions").bp_mentions(bp.mentions.users))},objectRequest:function(e){var a={},s=this;if((e=t.extend({object:"",scope:null,filter:null,target:"#buddypress [data-bp-list]",search_terms:"",page:1,extras:null,caller:null,template:null,method:"reset"},e)).object&&e.target)return e.search_terms&&(e.search_terms=e.search_terms.replace(/</g,"&lt;").replace(/>/g,"&gt;")),null!==e.scope&&this.setStorage("bp-"+e.object,"scope",e.scope),null!==e.filter&&this.setStorage("bp-"+e.object,"filter",e.filter),null!==e.extras&&this.setStorage("bp-"+e.object,"extras",e.extras),t(this.objectNavParent+" [data-bp-object]").each(function(){t(this).removeClass("selected loading")}),t(this.objectNavParent+' [data-bp-scope="'+e.scope+'"], #object-nav li.current').addClass("selected loading"),t('#buddypress [data-bp-filter="'+e.object+'"] option[value="'+e.filter+'"]').prop("selected",!0),"friends"===e.object||"friend_requests"===e.object||"group_members"===e.object?(e.template=e.object,e.object="members"):"group_requests"===e.object?(e.object="groups",e.template="group_requests"):"notifications"===e.object&&(e.object="members",e.template="member_notifications"),a=t.extend({action:e.object+"_filter"},e),this.ajax(a,e.object).done(function(a){if(!1!==a.success)if(t(s.objectNavParent+' [data-bp-scope="'+e.scope+'"]').removeClass("loading"),"reset"!==e.method)s.inject(e.target,a.data.contents,e.method),t(e.target).trigger("bp_ajax_"+e.method,t.extend(e,{response:a.data}));else if("pag-bottom"===e.caller&&t("#subnav").length){var r=t("#subnav").parent();t("html,body").animate({scrollTop:r.offset().top},"slow",function(){t(e.target).fadeOut(100,function(){s.inject(this,a.data.contents,e.method),t(this).fadeIn(100,"swing",function(){t(e.target).trigger("bp_ajax_request",t.extend(e,{response:a.data}))})})})}else t(e.target).fadeOut(100,function(){s.inject(this,a.data.contents,e.method),t(this).fadeIn(100,"swing",function(){t(e.target).trigger("bp_ajax_request",t.extend(e,{response:a.data}))})})})},initObjects:function(){var e=this,a={},s={},r="all",n="",i=null,o=null;t.each(this.objects,function(d,p){void 0!==(a=e.getStorage("bp-"+p)).scope&&(r=a.scope),void 0!==a.extras&&"notifications"!==p&&(i=a.extras),t('#buddypress [data-bp-filter="'+p+'"]').length&&("-1"!==t('#buddypress [data-bp-filter="'+p+'"]').val()&&"0"!==t('#buddypress [data-bp-filter="'+p+'"]').val()?o=t('#buddypress [data-bp-filter="'+p+'"]').val():void 0!==a.filter&&(o=a.filter,t('#buddypress [data-bp-filter="'+p+'"] option[value="'+o+'"]').prop("selected",!0))),t(this.objectNavParent+' [data-bp-object="'+p+'"]').length&&(t(this.objectNavParent+' [data-bp-object="'+p+'"]').each(function(){t(this).removeClass("selected")}),t(this.objectNavParent+' [data-bp-scope="'+p+'"], #object-nav li.current').addClass("selected")),null!==e.querystring&&(void 0!==e.querystring[p+"_search"]?n=e.querystring[p+"_search"]:void 0!==e.querystring.s&&(n=e.querystring.s),n&&(n=e.urlDecode(n),t('#buddypress [data-bp-search="'+p+'"] input[type=search]').val(n))),t('#buddypress [data-bp-list="'+p+'"]').length&&(s={object:p,scope:r,filter:o,search_terms:n,extras:i},e.objectRequest(s))})},setHeartBeat:function(){void 0!==BP_Nouveau.pulse&&this.heartbeat&&(this.heartbeat.interval(Number(BP_Nouveau.pulse)),t.fn.extend({"heartbeat-send":function(){return this.bind("heartbeat-send.buddypress")}}),t.fn.extend({"heartbeat-tick":function(){return this.bind("heartbeat-tick.buddypress")}}))},addListeners:function(){t("[data-bp-disable-input]").on("change",this.toggleDisabledInput),t(document).on("heartbeat-send.buddypress",this.heartbeatSend),t(document).on("heartbeat-tick.buddypress",this.heartbeatTick),t(this.objectNavParent+" .bp-navs").on("click","a",this,this.scopeQuery),t("#buddypress [data-bp-filter]").on("change",this,this.filterQuery),t("#buddypress [data-bp-search]").on("submit","form",this,this.searchQuery),t("#buddypress [data-bp-search] form").on("search","input[type=search]",this.resetSearch),t("#buddypress [data-bp-list], #buddypress #item-header").on("click","[data-bp-btn-action]",this,this.buttonAction),t("#buddypress [data-bp-close]").on("click",this,this.closeNotice),t("#buddypress [data-bp-list]").on("click","[data-bp-pagination] a",this,this.paginateAction)},toggleDisabledInput:function(){var e=t(this).attr("data-bp-disable-input");t(e).prop("disabled",!0)&&!t(this).hasClass("enabled")?(t(this).addClass("enabled").removeClass("disabled"),t(e).removeProp("disabled")):t(e).prop("disabled",!1)&&t(this).hasClass("enabled")&&(t(this).removeClass("enabled").addClass("disabled"),t(e).attr("disabled","disabled"))},heartbeatSend:function(e,a){t("#buddypress").trigger("bp_heartbeat_send",a)},heartbeatTick:function(e,a){t("#buddypress").trigger("bp_heartbeat_tick",a)},scopeQuery:function(e){var a,s=e.data,r=t(e.currentTarget).parent(),n="all",i=null,o="";return r.hasClass("no-ajax")||t(e.currentTarget).hasClass("no-ajax")||!r.attr("data-bp-scope")?e:(n=r.data("bp-scope"),a=r.data("bp-object"),n&&a?(e.preventDefault(),i=t("#buddypress").find('[data-bp-filter="'+a+'"]').first().val(),t('#buddypress [data-bp-search="'+a+'"] input[type=search]').length&&(o=t('#buddypress [data-bp-search="'+a+'"] input[type=search]').val()),r.hasClass("dynamic")&&r.find("a span").html(""),void s.objectRequest({object:a,scope:n,filter:i,search_terms:o,page:1})):e)},filterQuery:function(e){var a=e.data,s=t(e.target).data("bp-filter"),r="all",n=t(e.target).val(),i="";if(!s)return e;t(a.objectNavParent+" [data-bp-object].selected").length&&(r=t(a.objectNavParent+" [data-bp-object].selected").data("bp-scope")),t('#buddypress [data-bp-search="'+s+'"] input[type=search]').length&&(i=t('#buddypress [data-bp-search="'+s+'"] input[type=search]').val()),a.objectRequest({object:s,scope:r,filter:n,search_terms:i,page:1,template:null})},searchQuery:function(e){var a,s=e.data,r="all",n=null,i="";if(t(e.delegateTarget).hasClass("no-ajax")||void 0===t(e.delegateTarget).data("bp-search"))return e;e.preventDefault(),a=t(e.delegateTarget).data("bp-search"),n=t("#buddypress").find('[data-bp-filter="'+a+'"]').first().val(),i=t(e.delegateTarget).find("input[type=search]").first().val(),t(s.objectNavParent+" [data-bp-object]").length&&(r=t(s.objectNavParent+' [data-bp-object="'+a+'"].selected').data("bp-scope")),s.objectRequest({object:a,scope:r,filter:n,search_terms:i,page:1,template:null})},showSearchSubmit:function(e){t(e.delegateTarget).find("[type=submit]").addClass("bp-show"),t("[type=submit]").hasClass("bp-hide")&&t("[type=submit]").removeClass("bp-hide")},resetSearch:function(e){t(e.target).val()?t(e.delegateTarget).find("[type=submit]").show():t(e.delegateTarget).submit()},buttonAction:function(e){var a=e.data,s=t(e.currentTarget),r=s.data("bp-btn-action"),n=s.data("bp-nonce"),i=s.closest("[data-bp-item-id]"),o=i.data("bp-item-id"),d=s.closest(".list-wrap"),p=i.data("bp-item-component"),c="";if(!r||!o||!p)return e;if(e.preventDefault(),void 0!==BP_Nouveau[r+"_confirm"]&&!1===window.confirm(BP_Nouveau[r+"_confirm"])||s.hasClass("pending"))return!1;c=n?(c=n.split("?_wpnonce="))[1]:a.getLinkParams(s.prop("href"),"_wpnonce");var l={is_friend:"remove_friend",not_friends:"add_friend",pending:"withdraw_friendship",accept_friendship:"accept_friendship",reject_friendship:"reject_friendship"};"members"===p&&void 0!==l[r]&&(r=l[r],p="friends"),s.addClass("pending loading"),a.ajax({action:p+"_"+r,item_id:o,_wpnonce:c},p).done(function(e){if(!1===e.success)d.prepend(e.data.feedback),s.removeClass("pending loading"),i.find(".bp-feedback").fadeOut(6e3);else{if("groups"===p&&void 0!==e.data.is_group&&e.data.is_group)return window.location.reload();if(void 0!==e.data.is_user&&e.data.is_user)return s.parent().html(e.data.feedback),void i.fadeOut(1500);if(t(a.objectNavParent+' [data-bp-scope="personal"]').length){var n=Number(t(a.objectNavParent+' [data-bp-scope="personal"] span').html())||0;-1!==t.inArray(r,["leave_group","remove_friend"])?n-=1:-1!==t.inArray(r,["join_group"])&&(n+=1),n<0&&(n=0),t(a.objectNavParent+' [data-bp-scope="personal"] span').html(n)}s.parent().replaceWith(e.data.contents)}})},closeNotice:function(e){var a=t(e.currentTarget);e.preventDefault(),"clear"===a.data("bp-close")&&(void 0!==t.cookie("bp-message")&&t.removeCookie("bp-message"),void 0!==t.cookie("bp-message-type")&&t.removeCookie("bp-message-type")),a.closest(".bp-feedback").hasClass("bp-sitewide-notice")&&bp.Nouveau.ajax({action:"messages_dismiss_sitewide_notice"},"messages"),a.closest(".bp-feedback").remove()},paginateAction:function(e){var a,s,r,n=e.data,i=t(e.currentTarget),o=null,d=null,p=null,c=null;if(null===(a=i.closest("[data-bp-pagination]").data("bp-pagination")||null))return e;e.preventDefault(),null!==(s=t(e.delegateTarget).data("bp-list")||null)&&(void 0!==(r=n.getStorage("bp-"+s)).scope&&(o=r.scope),void 0!==r.filter&&(d=r.filter),void 0!==r.extras&&(c=r.extras)),t('#buddypress [data-bp-search="'+s+'"] input[type=search]').length&&(p=t('#buddypress [data-bp-search="'+s+'"] input[type=search]').val());var l={object:s,scope:o,filter:d,search_terms:p,extras:c,page:n.getLinkParams(i.prop("href"),a)||1};n.objectRequest(l)}},bp.Nouveau.start())}(bp,jQuery);}catch(e){}
try{/*! This file is auto-generated */
window.addComment=function(f){var v,I,C,h=f.document,E={commentReplyClass:"comment-reply-link",commentReplyTitleId:"reply-title",cancelReplyId:"cancel-comment-reply-link",commentFormId:"commentform",temporaryFormId:"wp-temp-form-div",parentIdFieldId:"comment_parent",postIdFieldId:"comment_post_ID"},e=f.MutationObserver||f.WebKitMutationObserver||f.MozMutationObserver,i="querySelector"in h&&"addEventListener"in f,n=!!h.documentElement.dataset;function t(){d(),function(){if(!e)return;new e(o).observe(h.body,{childList:!0,subtree:!0})}()}function d(e){if(i&&(v=b(E.cancelReplyId),I=b(E.commentFormId),v)){v.addEventListener("touchstart",l),v.addEventListener("click",l);var t=function(e){if((e.metaKey||e.ctrlKey)&&13===e.keyCode)return I.removeEventListener("keydown",t),e.preventDefault(),I.submit.click(),!1};I&&I.addEventListener("keydown",t);for(var n,d=function(e){var t,n=E.commentReplyClass;e&&e.childNodes||(e=h);t=h.getElementsByClassName?e.getElementsByClassName(n):e.querySelectorAll("."+n);return t}(e),o=0,r=d.length;o<r;o++)(n=d[o]).addEventListener("touchstart",a),n.addEventListener("click",a)}}function l(e){var t=b(E.temporaryFormId);if(t&&C){b(E.parentIdFieldId).value="0";var n=t.textContent;t.parentNode.replaceChild(C,t),this.style.display="none";var d=b(E.commentReplyTitleId),o=d&&d.firstChild,r=o&&o.nextSibling;o&&o.nodeType===Node.TEXT_NODE&&n&&(r&&"A"===r.nodeName&&r.id!==E.cancelReplyId&&(r.style.display=""),o.textContent=n),e.preventDefault()}}function a(e){var t=b(E.commentReplyTitleId),n=t&&t.firstChild.textContent,d=this,o=m(d,"belowelement"),r=m(d,"commentid"),i=m(d,"respondelement"),l=m(d,"postid"),a=m(d,"replyto")||n;o&&r&&i&&l&&!1===f.addComment.moveForm(o,r,i,l,a)&&e.preventDefault()}function o(e){for(var t=e.length;t--;)if(e[t].addedNodes.length)return void d()}function m(e,t){return n?e.dataset[t]:e.getAttribute("data-"+t)}function b(e){return h.getElementById(e)}return i&&"loading"!==h.readyState?t():i&&f.addEventListener("DOMContentLoaded",t,!1),{init:d,moveForm:function(e,t,n,d,o){var r=b(e);C=b(n);var i,l,a,m=b(E.parentIdFieldId),c=b(E.postIdFieldId),s=b(E.commentReplyTitleId),y=s&&s.firstChild,u=y&&y.nextSibling;if(r&&C&&m){void 0===o&&(o=y&&y.textContent),function(e){var t=E.temporaryFormId,n=b(t),d=b(E.commentReplyTitleId),o=d?d.firstChild.textContent:"";if(n)return;(n=h.createElement("div")).id=t,n.style.display="none",n.textContent=o,e.parentNode.insertBefore(n,e)}(C),d&&c&&(c.value=d),m.value=t,v.style.display="",r.parentNode.insertBefore(C,r.nextSibling),y&&y.nodeType===Node.TEXT_NODE&&(u&&"A"===u.nodeName&&u.id!==E.cancelReplyId&&(u.style.display="none"),y.textContent=o),v.onclick=function(){return!1};try{for(var p=0;p<I.elements.length;p++)if(i=I.elements[p],l=!1,"getComputedStyle"in f?a=f.getComputedStyle(i):h.documentElement.currentStyle&&(a=i.currentStyle),(i.offsetWidth<=0&&i.offsetHeight<=0||"hidden"===a.visibility)&&(l=!0),"hidden"!==i.type&&!i.disabled&&!l){i.focus();break}}catch(e){}return!1}}}}(window);}catch(e){}
try{console.log('LOLILOL');}catch(e){}
try{/*! This file is auto-generated */
!function(d,l){"use strict";var e=!1,o=!1;if(l.querySelector)if(d.addEventListener)e=!0;if(d.wp=d.wp||{},!d.wp.receiveEmbedMessage)if(d.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){var r,a,i,s,n,o=l.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),c=l.querySelectorAll('blockquote[data-secret="'+t.secret+'"]');for(r=0;r<c.length;r++)c[r].style.display="none";for(r=0;r<o.length;r++)if(a=o[r],e.source===a.contentWindow){if(a.removeAttribute("style"),"height"===t.message){if(1e3<(i=parseInt(t.value,10)))i=1e3;else if(~~i<200)i=200;a.height=i}if("link"===t.message)if(s=l.createElement("a"),n=l.createElement("a"),s.href=a.getAttribute("src"),n.href=t.value,n.host===s.host)if(l.activeElement===a)d.top.location.href=t.value}}},e)d.addEventListener("message",d.wp.receiveEmbedMessage,!1),l.addEventListener("DOMContentLoaded",t,!1),d.addEventListener("load",t,!1);function t(){if(!o){o=!0;var e,t,r,a,i=-1!==navigator.appVersion.indexOf("MSIE 10"),s=!!navigator.userAgent.match(/Trident.*rv:11\./),n=l.querySelectorAll("iframe.wp-embedded-content");for(t=0;t<n.length;t++){if(!(r=n[t]).getAttribute("data-secret"))a=Math.random().toString(36).substr(2,10),r.src+="#?secret="+a,r.setAttribute("data-secret",a);if(i||s)(e=r.cloneNode(!0)).removeAttribute("security"),r.parentNode.replaceChild(e,r)}}}}(window,document);}catch(e){}