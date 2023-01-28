//===============================
// Kayako LiveResponse
// Copyright (c) 2001-2021
// http://www.kayako.com
// License: http://www.kayako.com/license.txt
//===============================

var sessionid_pf3lxuaj = "E9GC2DbbVY8ZX4u6ac691566e0a46531b1e7931e5b9996810d11f93krWtvRqtcpL9hu44ZgpU7eKG5o";
var geoip_pf3lxuaj = new Array();
geoip_pf3lxuaj[3] = "";
geoip_pf3lxuaj[4] = "";
geoip_pf3lxuaj[2] = "";
geoip_pf3lxuaj[5] = "";
geoip_pf3lxuaj[12] = "";
geoip_pf3lxuaj[6] = "";
geoip_pf3lxuaj[1] = "";
geoip_pf3lxuaj[7] = "";
geoip_pf3lxuaj[8] = "";
geoip_pf3lxuaj[9] = "";
geoip_pf3lxuaj[10] = "";
geoip_pf3lxuaj[11] = "";
geoip_pf3lxuaj[13] = "";
var hasnotes_pf3lxuaj = "0";
var isnewsession_pf3lxuaj = "1";
var repeatvisit_pf3lxuaj = "1";
var lastvisittimeline_pf3lxuaj = "1631616743";
var lastchattimeline_pf3lxuaj = "0";
var isfirsttime_pf3lxuaj = 1;
var timer_pf3lxuaj = 0;
var imagefetch_pf3lxuaj = 19;
var imagefetchincr_pf3lxuaj = 10;
var imagefetchincrcount_pf3lxuaj = 0;
var updateurl_pf3lxuaj = "";
var screenHeight_pf3lxuaj = window.screen.availHeight;
var screenWidth_pf3lxuaj = window.screen.availWidth;
var colorDepth_pf3lxuaj = window.screen.colorDepth;
var timeNow = new Date();
var referrer = escape(document.referrer);
var windows_pf3lxuaj, mac_pf3lxuaj, linux_pf3lxuaj;
var ie_pf3lxuaj, op_pf3lxuaj, moz_pf3lxuaj, misc_pf3lxuaj, browsercode_pf3lxuaj, browsername_pf3lxuaj, browserversion_pf3lxuaj, operatingsys_pf3lxuaj;
var dom_pf3lxuaj, ienew, ie4_pf3lxuaj, ie5_pf3lxuaj, ie6_pf3lxuaj, ie7_pf3lxuaj, ie8_pf3lxuaj, moz_rv_pf3lxuaj, moz_rv_sub_pf3lxuaj, ie5mac, ie5xwin, opnu_pf3lxuaj, op4, op5_pf3lxuaj, op6_pf3lxuaj, op7_pf3lxuaj, op8_pf3lxuaj, op9_pf3lxuaj, op10_pf3lxuaj, saf_pf3lxuaj, konq_pf3lxuaj, chrome_pf3lxuaj, ch1_pf3lxuaj, ch2_pf3lxuaj, ch3_pf3lxuaj;
var appName_pf3lxuaj, appVersion_pf3lxuaj, userAgent_pf3lxuaj;
var appName_pf3lxuaj = navigator.appName;
var appVersion_pf3lxuaj = navigator.appVersion;
var userAgent_pf3lxuaj = navigator.userAgent;
var dombrowser = "default";
var isChatRunning_pf3lxuaj = 0;
var title = document.title;
var proactiveImageUse_pf3lxuaj = new Image();
windows_pf3lxuaj = (appVersion_pf3lxuaj.indexOf('Win') != -1);
mac_pf3lxuaj = (appVersion_pf3lxuaj.indexOf('Mac') != -1);
linux_pf3lxuaj = (appVersion_pf3lxuaj.indexOf('Linux') != -1);
if (!document.layers) {
	dom_pf3lxuaj = (document.getElementById ) ? document.getElementById : false;
} else {
	dom_pf3lxuaj = false;
}
var myWidth = 0, myHeight = 0;
if( typeof( window.innerWidth ) == 'number' ) {
	//Non-IE
	myWidth = window.innerWidth;
	myHeight = window.innerHeight;
} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
	//IE 6+ in 'standards compliant mode'
	myWidth = document.documentElement.clientWidth;
	myHeight = document.documentElement.clientHeight;
} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
	//IE 4 compatible
	myWidth = document.body.clientWidth;
	myHeight = document.body.clientHeight;
}
winH = myHeight;
winW = myWidth;
misc_pf3lxuaj = (appVersion_pf3lxuaj.substring(0,1) < 4);
op_pf3lxuaj = (userAgent_pf3lxuaj.indexOf('Opera') != -1);
moz_pf3lxuaj = (userAgent_pf3lxuaj.indexOf('Gecko') != -1);
chrome_pf3lxuaj=(userAgent_pf3lxuaj.indexOf('Chrome') != -1);
if (document.all) {
	ie_pf3lxuaj = (document.all && !op_pf3lxuaj);
}
saf_pf3lxuaj=(userAgent_pf3lxuaj.indexOf('Safari') != -1);
konq_pf3lxuaj=(userAgent_pf3lxuaj.indexOf('Konqueror') != -1);

if (op_pf3lxuaj) {
	op_pos = userAgent_pf3lxuaj.indexOf('Opera');
	opnu_pf3lxuaj = userAgent_pf3lxuaj.substr((op_pos+6),4);
	op5_pf3lxuaj = (opnu_pf3lxuaj.substring(0,1) == 5);
	op6_pf3lxuaj = (opnu_pf3lxuaj.substring(0,1) == 6);
	op7_pf3lxuaj = (opnu_pf3lxuaj.substring(0,1) == 7);
	op8_pf3lxuaj = (opnu_pf3lxuaj.substring(0,1) == 8);
	op9_pf3lxuaj = (opnu_pf3lxuaj.substring(0,1) == 9);
	op10_pf3lxuaj = (opnu_pf3lxuaj.substring(0,2) == 10);
} else if (chrome_pf3lxuaj) {
	chrome_pos = userAgent_pf3lxuaj.indexOf('Chrome');
	chnu = userAgent_pf3lxuaj.substr((chrome_pos+7),4);
	ch1_pf3lxuaj = (chnu.substring(0,1) == 1);
	ch2_pf3lxuaj = (chnu.substring(0,1) == 2);
	ch3_pf3lxuaj = (chnu.substring(0,1) == 3);
} else if (moz_pf3lxuaj){
	rv_pos = userAgent_pf3lxuaj.indexOf('rv');
	moz_rv_pf3lxuaj = userAgent_pf3lxuaj.substr((rv_pos+3),3);
	moz_rv_sub_pf3lxuaj = userAgent_pf3lxuaj.substr((rv_pos+7),1);
	if (moz_rv_sub_pf3lxuaj == ' ' || isNaN(moz_rv_sub_pf3lxuaj)) {
		moz_rv_sub_pf3lxuaj='';
	}
	moz_rv_pf3lxuaj = moz_rv_pf3lxuaj + moz_rv_sub_pf3lxuaj;
} else if (ie_pf3lxuaj){
	ie_pos = userAgent_pf3lxuaj.indexOf('MSIE');
	ienu = userAgent_pf3lxuaj.substr((ie_pos+5),3);
	ie4_pf3lxuaj = (!dom_pf3lxuaj);
	ie5_pf3lxuaj = (ienu.substring(0,1) == 5);
	ie6_pf3lxuaj = (ienu.substring(0,1) == 6);
	ie7_pf3lxuaj = (ienu.substring(0,1) == 7);
	ie8_pf3lxuaj = (ienu.substring(0,1) == 8);
}

if (konq_pf3lxuaj) {
	browsercode_pf3lxuaj = "KO";
	browserversion_pf3lxuaj = appVersion_pf3lxuaj;
	browsername_pf3lxuaj = "Konqueror";
} else if (chrome_pf3lxuaj) {
	browsercode_pf3lxuaj = "CH";
	if (ch1_pf3lxuaj) {
		browserversion_pf3lxuaj = "1";
	} else if (ch2_pf3lxuaj) {
		browserversion_pf3lxuaj = "2";
	} else if (ch3_pf3lxuaj) {
		browserversion_pf3lxuaj = "3";
	}

	browsername_pf3lxuaj = "Google Chrome";
} else if (saf_pf3lxuaj) {
	browsercode_pf3lxuaj = "SF";
	browserversion_pf3lxuaj = appVersion_pf3lxuaj;
	browsername_pf3lxuaj = "Safari";
} else if (op_pf3lxuaj) {
	browsercode_pf3lxuaj = "OP";
	if (op5_pf3lxuaj) {
		browserversion_pf3lxuaj = "5";
	} else if (op6_pf3lxuaj) {
		browserversion_pf3lxuaj = "6";
	} else if (op7_pf3lxuaj) {
		browserversion_pf3lxuaj = "7";
	} else if (op8_pf3lxuaj) {
		browserversion_pf3lxuaj = "8";
	} else if (op9_pf3lxuaj) {
		browserversion_pf3lxuaj = "9";
	} else if (op10_pf3lxuaj) {
		browserversion_pf3lxuaj = "10";
	} else {
		browserversion_pf3lxuaj = appVersion_pf3lxuaj;
	}
	browsername_pf3lxuaj = "Opera";
} else if (moz_pf3lxuaj) {
	browsercode_pf3lxuaj = "MO";
	browserversion_pf3lxuaj = appVersion_pf3lxuaj;
	browsername_pf3lxuaj = "Firefox";
} else if (ie_pf3lxuaj) {
	browsercode_pf3lxuaj = "IE";
	if (ie4_pf3lxuaj) {
		browserversion_pf3lxuaj = "4";
	} else if (ie5_pf3lxuaj) {
		browserversion_pf3lxuaj = "5";
	} else if (ie6_pf3lxuaj) {
		browserversion_pf3lxuaj = "6";
	} else if (ie7_pf3lxuaj) {
		browserversion_pf3lxuaj = "7";
	} else if (ie8_pf3lxuaj) {
		browserversion_pf3lxuaj = "8";
	} else {
		browserversion_pf3lxuaj = appVersion_pf3lxuaj;
	}
	browsername_pf3lxuaj = "Internet Explorer";
}

if (windows_pf3lxuaj) {
	operatingsys_pf3lxuaj = "Windows";
} else if (linux_pf3lxuaj) {
	operatingsys_pf3lxuaj = "Linux";
} else if (mac_pf3lxuaj) {
	operatingsys_pf3lxuaj = "Mac";
} else {
	operatingsys_pf3lxuaj = "Unkown";
}

if (document.getElementById)
{
	dombrowser = "default";
} else if (document.layers) {
	dombrowser = "NS4";
} else if (document.all) {
	dombrowser = "IE4";
}

var proactiveX = 20;
var proactiveXStep = 1;
var proactiveDelayTime = 100;

var proactiveY = 0;
var proactiveOffsetHeight=0;
var proactiveYStep = 0;
var proactiveAnimate = false;

function browserObject_pf3lxuaj(objid)
{
	if (dombrowser == "default")
	{
		return document.getElementById(objid);
	} else if (dombrowser == "NS4") {
		return document.layers[objid];
	} else if (dombrowser == "IE4") {
		return document.all[objid];
	}
}

function doRand_pf3lxuaj()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
}

function getCookie_pf3lxuaj(name) {
	var crumb = document.cookie;
	var index = crumb.indexOf(name + "=");
	if (index == -1) return null;
	index = crumb.indexOf("=", index) + 1;
	var endstr = crumb.indexOf(";", index);
	if (endstr == -1) endstr = crumb.length;
	return unescape(crumb.substring(index, endstr));
}

function deleteCookie_pf3lxuaj(name) {
	var expiry = new Date();
	document.cookie = name + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT" +  "; path=/";
}

function elapsedTime_pf3lxuaj()
{
	if (typeof _elapsedTimeStatusIndicator == 'undefined') {
		_elapsedTimeStatusIndicator = 'pf3lxuaj';
	} else if (typeof _elapsedTimeStatusIndicator == 'string' && _elapsedTimeStatusIndicator != 'pf3lxuaj') {

		return;
	}


	if (timer_pf3lxuaj < 3600)
	{
		timer_pf3lxuaj++;
		imagefetch_pf3lxuaj++;

		if (imagefetch_pf3lxuaj > (19 + (imagefetchincr_pf3lxuaj * imagefetchincrcount_pf3lxuaj))) {
			imagefetch_pf3lxuaj = 0;
			imagefetchincrcount_pf3lxuaj++;
			doStatusLoop_pf3lxuaj();
		}

					setTimeout("elapsedTime_pf3lxuaj();", 1000);
			}
}


var Base64_pf3lxuaj = {
	_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
	encode : function (input) {
		var output = "";
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
		var i = 0;

		input = Base64_pf3lxuaj._utf8_encode(input);

		while (i < input.length) {

			chr1 = input.charCodeAt(i++);
			chr2 = input.charCodeAt(i++);
			chr3 = input.charCodeAt(i++);

			enc1 = chr1 >> 2;
			enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
			enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
			enc4 = chr3 & 63;

			if (isNaN(chr2)) {
				enc3 = enc4 = 64;
			} else if (isNaN(chr3)) {
				enc4 = 64;
			}

			output = output +
			this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
			this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

		}

		return output;
	},

	_utf8_encode : function (string) {
		string = string.replace(/\r\n/g,"\n");
		var utftext = "";

		for (var n = 0; n < string.length; n++) {

			var c = string.charCodeAt(n);

			if (c < 128) {
				utftext += String.fromCharCode(c);
			}
			else if((c > 127) && (c < 2048)) {
				utftext += String.fromCharCode((c >> 6) | 192);
				utftext += String.fromCharCode((c & 63) | 128);
			}
			else {
				utftext += String.fromCharCode((c >> 12) | 224);
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);
				utftext += String.fromCharCode((c & 63) | 128);
			}

		}

		return utftext;
	}
}

function doStatusLoop_pf3lxuaj() {
	date1 = new Date();
	var _finalPageTitle=Base64_pf3lxuaj.encode(title);

	var _finalWindowLocation = encodeURIComponent(decodeURIComponent(window.location));
	var _referrerURL = encodeURIComponent(decodeURIComponent(document.referrer));
	updateurl_pf3lxuaj = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/UpdateFootprint/_time="+date1.getTime()+"/_randomNumber="+doRand_pf3lxuaj()+"/_url="+_finalWindowLocation+"/_isFirstTime="+encodeURIComponent(isfirsttime_pf3lxuaj)+"/_sessionID="+encodeURIComponent(sessionid_pf3lxuaj)+"/_referrer="+_referrerURL+"/_resolution="+encodeURIComponent(screenWidth_pf3lxuaj+"x"+screenHeight_pf3lxuaj)+"/_colorDepth="+encodeURIComponent(colorDepth_pf3lxuaj)+"/_platform="+encodeURIComponent(navigator.platform)+"/_appVersion="+encodeURIComponent(navigator.appVersion)+"/_appName="+encodeURIComponent(navigator.appName)+"/_browserCode="+encodeURIComponent(browsercode_pf3lxuaj)+"/_browserVersion="+encodeURIComponent(browserversion_pf3lxuaj)+"/_browserName="+encodeURIComponent(browsername_pf3lxuaj)+"/_operatingSys="+encodeURIComponent(operatingsys_pf3lxuaj)+"/_pageTitle="+encodeURIComponent(_finalPageTitle)+"/_hasNotes="+encodeURIComponent(hasnotes_pf3lxuaj)+"/_repeatVisit="+encodeURIComponent(repeatvisit_pf3lxuaj)+"/_lastVisitTimeline="+encodeURIComponent(lastvisittimeline_pf3lxuaj)+"/_lastChatTimeline="+encodeURIComponent(lastchattimeline_pf3lxuaj)+"/_isNewSession="+encodeURIComponent(isnewsession_pf3lxuaj)+"/_geoIP_3="+encodeURIComponent(geoip_pf3lxuaj[3])+"/_geoIP_4="+encodeURIComponent(geoip_pf3lxuaj[4])+"/_geoIP_2="+encodeURIComponent(geoip_pf3lxuaj[2])+"/_geoIP_5="+encodeURIComponent(geoip_pf3lxuaj[5])+"/_geoIP_12="+encodeURIComponent(geoip_pf3lxuaj[12])+"/_geoIP_6="+encodeURIComponent(geoip_pf3lxuaj[6])+"/_geoIP_1="+encodeURIComponent(geoip_pf3lxuaj[1])+"/_geoIP_7="+encodeURIComponent(geoip_pf3lxuaj[7])+"/_geoIP_8="+encodeURIComponent(geoip_pf3lxuaj[8])+"/_geoIP_9="+encodeURIComponent(geoip_pf3lxuaj[9])+"/_geoIP_10="+encodeURIComponent(geoip_pf3lxuaj[10])+"/_geoIP_11="+encodeURIComponent(geoip_pf3lxuaj[11])+"/_geoIP_13="+encodeURIComponent(geoip_pf3lxuaj[13]);

	proactiveImageUse_pf3lxuaj = new Image();
	proactiveImageUse_pf3lxuaj.onload = imageLoaded_pf3lxuaj;
	proactiveImageUse_pf3lxuaj.src = updateurl_pf3lxuaj;

	isfirsttime_pf3lxuaj = 0;
}

function startChat_pf3lxuaj(proactive)
{
	isChatRunning_pf3lxuaj = 1;

	docWidth = (winW-599)/2;
	docHeight = (winH-679)/2;

		_chatWindowURL = 'https://support.aut.ac.ir/visitor/index.php?/LiveChat/Chat/Request/_sessionID=' + sessionid_pf3lxuaj + '/_proactive=' + proactive + '/_filterDepartmentID=/_randomNumber=' + doRand_pf3lxuaj() + '/_fullName=/_email=/_promptType=chat';
	

	chatwindow = window.open(_chatWindowURL,"customerchat"+doRand_pf3lxuaj(), "toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=yes,resizable=1,width=599,height=679,left="+docWidth+",top="+docHeight);

	hideProactiveChatData_pf3lxuaj();
}

function imageLoaded_pf3lxuaj() {
	if (!proactiveImageUse_pf3lxuaj)
	{
		return;
	}
	proactiveAction = proactiveImageUse_pf3lxuaj.width;

	if (proactiveAction == 3)
	{
		doProactiveInline_pf3lxuaj();
	} else if (proactiveAction == 4) {
		displayProactiveChatData_pf3lxuaj();
	}
}

function writeInlineRequestData_pf3lxuaj()
{
	docWidth = (winW-600)/2;
	docHeight = (winH-680)/2;

	var divData = '';
	divData += "<div style=\"float: left; width: 600px;\"><iframe width=\"600\" height=\"680\" scrolling=\"auto\" frameborder=\"0\" src=\"\" name=\"inlinechatframe\" id=\"inlinechatframe\">error: no iframe support detected</iframe></div><div id=\"inlinechatclosebutton\" style=\"float: left; margin-left: -30px; margin-top: -2px;\"><a href=\"javascript: closeInlineProactiveRequest_pf3lxuaj();\"><i style=\"color:red;\" class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i></a></div>";

	var inlineChatElement = document.createElement("div");
	inlineChatElement.style.position = 'absolute';
	inlineChatElement.style.display = 'none';
	inlineChatElement.style.float = 'left';
	inlineChatElement.style.top = docHeight+'px';
	inlineChatElement.style.left = docWidth+'px';
	inlineChatElement.style.zIndex = 500;

	if (inlineChatElement.style.overflow) {
		inlineChatElement.style.overflow = 'none';
	}

	inlineChatElement.id = 'inlinechatdiv';
	inlineChatElement.innerHTML = divData;

	var proactiveChatContainer = document.getElementById('proactivechatcontainer' + swiftuniqueid);
	proactiveChatContainer.appendChild(inlineChatElement);
}

function writeProactiveRequestData_pf3lxuaj()
{
	docWidth = (winW-450)/2;
	docHeight = (winH-400)/2;

	var divData = '';
	divData += "<div style=\"float: left; width: 500px; background: #ffffff url(\'https://support.aut.ac.ir/__swift/themes/client/images/mainbackground.gif\') repeat; border: solid 1px #bababa;\">	<div style=\"background: #ffffff url(\'https://support.aut.ac.ir/__swift/themes/client/images/icon_proactiveuserbackground.gif\') no-repeat bottom left; border: solid 1px #bababa; margin: 8px;\">		<div style=\"text-align: center;margin-top: 15px;margin-bottom: 10px;\"><img align=\"absmiddle\" border=\"0\" src=\"https://support.aut.ac.ir/__swift/files/file_a1rdsripf2ndrrj.png\"></div>		<hr style=\"border: solid #d8dbdf; border-width: 1px 0 0; clear: both; height: 0; margin: 0; text-align: center\">		<div style=\"padding-left: 100px; text-align: center; margin-top: 20px; height: 60px; overflow: hidden; font: 40px \'segoe ui\',\'helvetica neue\', arial, helvetica, sans-serif; color: #128dbe;width: 350px;\">			میتونم کمکتون کنم؟		</div>		<div style=\"padding-left: 100px; vertical-align: top; margin-top: 0px; padding-top: 0px; height: 180px; font: 18pt \'segoe ui\',\'helvetica neue\', arial, helvetica, sans-serif; color: #4c5156;width: 350px;\">			تیم ما آماده است تا به شما کمک کند. روی  &quot;گفتگو&quot; کلیک کنید.<br>			<div style=\"padding-top: 30px; padding-left: 90px; text-align: center;\">				<div onclick=\"javascript:doProactiveRequest_pf3lxuaj();\" style=\"font-weight: normal;font-size: 19px;color: #5d9928;padding: 10px 25px 10px 25px;background-color: #fff;background: -moz-linear-gradient(top,#fafafa 0%,#e7ebf0);background: -webkit-gradient(linear, left top, left bottom, from(#ffffff),to(#f3f3f3));-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;border: 1px solid #cdd2d4;-moz-box-shadow: 0px 1px 1px #f8f8f8,inset 0px 1px 1px #fff;-webkit-box-shadow: 0px 1px 1px #f8f8f8,inset 0px 1px 1px #fff;box-shadow: 0px 1px 1px #f8f8f8,inset 0px 1px 1px #fff;text-shadow: 0px 1px 0px #fff;cursor: pointer;width: 100px;\">					گفتگو				</div>			</div>		</div>	</div></div><div style=\"float: left; margin-left: -8px; margin-top: -8px;\">	<a href=\"javascript:closeProactiveRequest_pf3lxuaj();\"><img align=\"absmiddle\" border=\"0\" src=\"https://support.aut.ac.ir/__swift/themes/client/images/icon_close.png\"></a></div>";

	var proactiveElement = document.createElement("div");
	proactiveElement.style.position = 'absolute';
	proactiveElement.style.display = 'none';
	proactiveElement.style.float = 'left';
	proactiveElement.style.top = docHeight+'px';
	proactiveElement.style.left = docWidth+'px';
	proactiveElement.style.zIndex = 500;

	if (proactiveElement.style.overflow) {
		proactiveElement.style.overflow = 'none';
	}

	proactiveElement.id = 'proactivechatdiv';
	proactiveElement.innerHTML = divData;

	var proactiveChatContainer = document.getElementById('proactivechatcontainer' + swiftuniqueid);
	proactiveChatContainer.appendChild(proactiveElement);
}

function displayProactiveChatData_pf3lxuaj()
{
	if (proactiveAnimate == true) {
		return false;
	}

	writeObj = browserObject_pf3lxuaj("proactivechatdiv");
	if (writeObj)
	{
		docWidth = (winW-450)/2;
		docHeight = (winH-400)/2;
		proactiveY = docHeight;
		writeObj.top = docWidth;
		writeObj.left = docHeight;
		proactiveAnimate = true;
	}

	showDisplay_pf3lxuaj("proactivechatdiv");

		animateProactiveDiv_pf3lxuaj();
	}

function displayInlineChatData_pf3lxuaj()
{
	writeObj = browserObject_pf3lxuaj("inlinechatdiv");
	if (writeObj)
	{
		docWidth = (winW-600)/2;
		docHeight = (winH-680)/2;
		proactiveY = docHeight;
		writeObj.top = docHeight;
		writeObj.left = docWidth;

		acceptProactive = new Image();
		acceptProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_pf3lxuaj()+"/_sessionID="+sessionid_pf3lxuaj;

		inlineChatFrameObj = browserObject_pf3lxuaj("inlinechatframe");
		_iframeURL = 'https://support.aut.ac.ir/visitor/index.php?/LiveChat/Chat/StartInline/_sessionID=E9GC2DbbVY8ZX4u6ac691566e0a46531b1e7931e5b9996810d11f93krWtvRqtcpL9hu44ZgpU7eKG5o/_proactive=1/_filterDepartmentID=/_fullName=/_email=/_inline=1/';
		if (inlineChatFrameObj && inlineChatFrameObj.src != _iframeURL && writeObj.style.display == 'none') {
			inlineChatFrameObj.src = _iframeURL;
		}
	}

	showDisplay_pf3lxuaj("inlinechatdiv");
}

function hideProactiveChatData_pf3lxuaj()
{
	hideDisplay_pf3lxuaj("proactivechatdiv");
	hideDisplay_pf3lxuaj("inlinechatdiv");
}

function doProactiveInline_pf3lxuaj()
{
	displayInlineChatData_pf3lxuaj();
}

function doProactiveRequest_pf3lxuaj()
{
	acceptProactive = new Image();
	acceptProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_pf3lxuaj()+"/_sessionID="+sessionid_pf3lxuaj;

	startChat_pf3lxuaj("4");
}

function closeProactiveRequest_pf3lxuaj()
{
	rejectProactive = new Image();
	date1 = new Date();
	proactiveAnimate = false;
	rejectProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_pf3lxuaj()+"/_sessionID="+sessionid_pf3lxuaj;

	hideProactiveChatData_pf3lxuaj();
}

function closeInlineProactiveRequest_pf3lxuaj()
{
	rejectProactive = new Image();
	date1 = new Date();
	rejectProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_pf3lxuaj()+"/_sessionID="+sessionid_pf3lxuaj;

	document.getElementById('inlinechatframe').contentWindow.postMessage('CloseProactiveChat', '*');
	//	window.frames.inlinechatframe.CloseProactiveChat();
}

function closeInlineProactiveRequest2_pf3lxuaj()
{
	var bodyElement = document.getElementsByTagName('body');
	if (bodyElement[0])
	{
		var inlineDivElement = browserObject_pf3lxuaj('inlinechatdiv');
		if (inlineDivElement) {
			var _parentNode = inlineDivElement.parentNode;
			_parentNode.removeChild(inlineDivElement);
		}
	}
}

	window.onmessage = function(e){
	if (e.data == 'CloseProactiveChat') {
	closeInlineProactiveRequest2_pf3lxuaj();
	}
	};

function switchDisplay_pf3lxuaj(objid)
{
	result = browserObject_pf3lxuaj(objid);
	if (!result)
	{
		return;
	}

	if (result.style.display == "none")
	{
		result.style.display = "block";
	} else {
		result.style.display = "none";
	}
}

function hideDisplay_pf3lxuaj(objid)
{
	result = browserObject_pf3lxuaj(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "none";
}

function showDisplay_pf3lxuaj(objid)
{
	result = browserObject_pf3lxuaj(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "block";
}

function updateProactivePosition_pf3lxuaj()
{
	writeObj = browserObject_pf3lxuaj("proactivechatdiv");
	writeObjInline = browserObject_pf3lxuaj("inlinechatdiv");

	docHeight = (winH-412)/2;
	docHeightInline = (winH-680)/2;

	finalTopValue = docHeight + document.body.scrollTop;
	if (finalTopValue < 0) {
		finalTopValue = 10;
	}

	finalTopValueInline = docHeightInline + document.body.scrollTop;
	if (finalTopValueInline < 0) {
		finalTopValueInline = 10;
	}

	if (writeObj) {
		writeObj.style.top = finalTopValue + "px";
	}

	if (writeObjInline) {
		writeObjInline.style.top = finalTopValueInline + "px";
	}
}

function animateProactiveDiv_pf3lxuaj()
{
	writeObj = browserObject_pf3lxuaj("proactivechatdiv");

	if (!writeObj) {
		return false;
	}

	if(proactiveYStep == 0){proactiveY = proactiveY-proactiveXStep;} else {proactiveY = proactiveY+proactiveXStep;}

	proactiveOffsetHeight = writeObj.offsetHeight;
	if(proactiveY < 0){proactiveYStep = 1; proactiveY=0; }
	if(proactiveY >= (myHeight - proactiveOffsetHeight)){proactiveYStep=0; proactiveY=(myHeight-proactiveOffsetHeight);}

	finalTopValue = proactiveY+document.body.scrollTop;
	if (finalTopValue < 0) {
		finalTopValue = 10;
	}

	writeObj.style.top = finalTopValue+"px";

	if (proactiveAnimate) {
		setTimeout('animateProactiveDiv_pf3lxuaj()', proactiveDelayTime);
	}
}

	writeProactiveRequestData_pf3lxuaj(); writeInlineRequestData_pf3lxuaj();

elapsedTime_pf3lxuaj();

var oldEvtScroll = window.onscroll; window.onscroll = function() { if (oldEvtScroll) { updateProactivePosition_pf3lxuaj(); } }

var swifttagdiv=document.createElement("div");swifttagdiv.innerHTML = "<style type=\"text/css\">#kayako_sitebadgebg:hover {	background-color: #bec0c5 !important;}#kayako_sitebadgebg {	background-color: #a2a4ac;	border-color: #bec0c5 #717378 #717378 #717378 !important;}</style><div id=\"kayako_sitebadgecontainer\" title=\"گفتگو آنلاین در دسترس نیست. برای گذاشتن پیام کلیک کنید.\" onclick=\"javascript: startChat_pf3lxuaj(\'0\');\" style=\"background: transparent none repeat scroll 0 0; bottom: 0; cursor:pointer; height: 101px; left: 0; line-height: normal; margin: 0; padding: 0; position: fixed; top: 35% !important; z-index: 4000000000 !important;\">	<div id=\"kayako_sitebadgeholder\">		<div id=\"kayako_sitebadgeindicator\" style=\"background: transparent URL(\'https://support.aut.ac.ir/__swift/themes/client/images/icon_badge_gray.png\') no-repeat scroll 0 0; width: 30px; height: 30px; line-height: normal; margin: 0; padding: 0; position: absolute; left: 10px; top: -8px; z-index: 20000;\"></div>		<div id=\"kayako_sitebadgebg\" id=\"kayako_sitebadgebg\" style=\"background-color: #a2a4ac; border-color: #bec0c5 #717378 #717378 #717378 !important; background-image: URL(\'https://support.aut.ac.ir/__swift/themes/client/images/badge_livehelp_en_white.png\'); background-position: 1px 8px; background-repeat: no-repeat; -moz-border-radius: 0 1em 1em 0 !important; border-radius: 0 1em 1em 0 !important; -webkit-border-radius: 0 1em 1em 0 !important; border-style: outset outset outset none !important; border-width: 1px 1px 1px medium !important; height: 101px !important; left: 0 !important; margin: 0 !important; opacity: 0.90 !important; padding: 0 !important; position: absolute !important; top: 0 !important; width: 30px !important; z-index: 19999 !important;\"></div>	</div></div>";document.getElementById("swifttagdatacontainert5i5br5oo5").appendChild(swifttagdiv);