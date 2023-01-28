//===============================
// Kayako LiveResponse
// Copyright (c) 2001-2021
// http://www.kayako.com
// License: http://www.kayako.com/license.txt
//===============================

var sessionid_bm4pfp7w = "E9GC2DbbVY8ZX4u6ac691566e0a46531b1e7931e5b9996810d11f93krWtvRqtcpL9hu44ZgpU7eKG5o";
var geoip_bm4pfp7w = new Array();
geoip_bm4pfp7w[3] = "";
geoip_bm4pfp7w[4] = "";
geoip_bm4pfp7w[2] = "";
geoip_bm4pfp7w[5] = "";
geoip_bm4pfp7w[12] = "";
geoip_bm4pfp7w[6] = "";
geoip_bm4pfp7w[1] = "";
geoip_bm4pfp7w[7] = "";
geoip_bm4pfp7w[8] = "";
geoip_bm4pfp7w[9] = "";
geoip_bm4pfp7w[10] = "";
geoip_bm4pfp7w[11] = "";
geoip_bm4pfp7w[13] = "";
var hasnotes_bm4pfp7w = "0";
var isnewsession_bm4pfp7w = "0";
var repeatvisit_bm4pfp7w = "0";
var lastvisittimeline_bm4pfp7w = "0";
var lastchattimeline_bm4pfp7w = "0";
var isfirsttime_bm4pfp7w = 1;
var timer_bm4pfp7w = 0;
var imagefetch_bm4pfp7w = 19;
var imagefetchincr_bm4pfp7w = 10;
var imagefetchincrcount_bm4pfp7w = 0;
var updateurl_bm4pfp7w = "";
var screenHeight_bm4pfp7w = window.screen.availHeight;
var screenWidth_bm4pfp7w = window.screen.availWidth;
var colorDepth_bm4pfp7w = window.screen.colorDepth;
var timeNow = new Date();
var referrer = escape(document.referrer);
var windows_bm4pfp7w, mac_bm4pfp7w, linux_bm4pfp7w;
var ie_bm4pfp7w, op_bm4pfp7w, moz_bm4pfp7w, misc_bm4pfp7w, browsercode_bm4pfp7w, browsername_bm4pfp7w, browserversion_bm4pfp7w, operatingsys_bm4pfp7w;
var dom_bm4pfp7w, ienew, ie4_bm4pfp7w, ie5_bm4pfp7w, ie6_bm4pfp7w, ie7_bm4pfp7w, ie8_bm4pfp7w, moz_rv_bm4pfp7w, moz_rv_sub_bm4pfp7w, ie5mac, ie5xwin, opnu_bm4pfp7w, op4, op5_bm4pfp7w, op6_bm4pfp7w, op7_bm4pfp7w, op8_bm4pfp7w, op9_bm4pfp7w, op10_bm4pfp7w, saf_bm4pfp7w, konq_bm4pfp7w, chrome_bm4pfp7w, ch1_bm4pfp7w, ch2_bm4pfp7w, ch3_bm4pfp7w;
var appName_bm4pfp7w, appVersion_bm4pfp7w, userAgent_bm4pfp7w;
var appName_bm4pfp7w = navigator.appName;
var appVersion_bm4pfp7w = navigator.appVersion;
var userAgent_bm4pfp7w = navigator.userAgent;
var dombrowser = "default";
var isChatRunning_bm4pfp7w = 0;
var title = document.title;
var proactiveImageUse_bm4pfp7w = new Image();
windows_bm4pfp7w = (appVersion_bm4pfp7w.indexOf('Win') != -1);
mac_bm4pfp7w = (appVersion_bm4pfp7w.indexOf('Mac') != -1);
linux_bm4pfp7w = (appVersion_bm4pfp7w.indexOf('Linux') != -1);
if (!document.layers) {
	dom_bm4pfp7w = (document.getElementById ) ? document.getElementById : false;
} else {
	dom_bm4pfp7w = false;
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
misc_bm4pfp7w = (appVersion_bm4pfp7w.substring(0,1) < 4);
op_bm4pfp7w = (userAgent_bm4pfp7w.indexOf('Opera') != -1);
moz_bm4pfp7w = (userAgent_bm4pfp7w.indexOf('Gecko') != -1);
chrome_bm4pfp7w=(userAgent_bm4pfp7w.indexOf('Chrome') != -1);
if (document.all) {
	ie_bm4pfp7w = (document.all && !op_bm4pfp7w);
}
saf_bm4pfp7w=(userAgent_bm4pfp7w.indexOf('Safari') != -1);
konq_bm4pfp7w=(userAgent_bm4pfp7w.indexOf('Konqueror') != -1);

if (op_bm4pfp7w) {
	op_pos = userAgent_bm4pfp7w.indexOf('Opera');
	opnu_bm4pfp7w = userAgent_bm4pfp7w.substr((op_pos+6),4);
	op5_bm4pfp7w = (opnu_bm4pfp7w.substring(0,1) == 5);
	op6_bm4pfp7w = (opnu_bm4pfp7w.substring(0,1) == 6);
	op7_bm4pfp7w = (opnu_bm4pfp7w.substring(0,1) == 7);
	op8_bm4pfp7w = (opnu_bm4pfp7w.substring(0,1) == 8);
	op9_bm4pfp7w = (opnu_bm4pfp7w.substring(0,1) == 9);
	op10_bm4pfp7w = (opnu_bm4pfp7w.substring(0,2) == 10);
} else if (chrome_bm4pfp7w) {
	chrome_pos = userAgent_bm4pfp7w.indexOf('Chrome');
	chnu = userAgent_bm4pfp7w.substr((chrome_pos+7),4);
	ch1_bm4pfp7w = (chnu.substring(0,1) == 1);
	ch2_bm4pfp7w = (chnu.substring(0,1) == 2);
	ch3_bm4pfp7w = (chnu.substring(0,1) == 3);
} else if (moz_bm4pfp7w){
	rv_pos = userAgent_bm4pfp7w.indexOf('rv');
	moz_rv_bm4pfp7w = userAgent_bm4pfp7w.substr((rv_pos+3),3);
	moz_rv_sub_bm4pfp7w = userAgent_bm4pfp7w.substr((rv_pos+7),1);
	if (moz_rv_sub_bm4pfp7w == ' ' || isNaN(moz_rv_sub_bm4pfp7w)) {
		moz_rv_sub_bm4pfp7w='';
	}
	moz_rv_bm4pfp7w = moz_rv_bm4pfp7w + moz_rv_sub_bm4pfp7w;
} else if (ie_bm4pfp7w){
	ie_pos = userAgent_bm4pfp7w.indexOf('MSIE');
	ienu = userAgent_bm4pfp7w.substr((ie_pos+5),3);
	ie4_bm4pfp7w = (!dom_bm4pfp7w);
	ie5_bm4pfp7w = (ienu.substring(0,1) == 5);
	ie6_bm4pfp7w = (ienu.substring(0,1) == 6);
	ie7_bm4pfp7w = (ienu.substring(0,1) == 7);
	ie8_bm4pfp7w = (ienu.substring(0,1) == 8);
}

if (konq_bm4pfp7w) {
	browsercode_bm4pfp7w = "KO";
	browserversion_bm4pfp7w = appVersion_bm4pfp7w;
	browsername_bm4pfp7w = "Konqueror";
} else if (chrome_bm4pfp7w) {
	browsercode_bm4pfp7w = "CH";
	if (ch1_bm4pfp7w) {
		browserversion_bm4pfp7w = "1";
	} else if (ch2_bm4pfp7w) {
		browserversion_bm4pfp7w = "2";
	} else if (ch3_bm4pfp7w) {
		browserversion_bm4pfp7w = "3";
	}

	browsername_bm4pfp7w = "Google Chrome";
} else if (saf_bm4pfp7w) {
	browsercode_bm4pfp7w = "SF";
	browserversion_bm4pfp7w = appVersion_bm4pfp7w;
	browsername_bm4pfp7w = "Safari";
} else if (op_bm4pfp7w) {
	browsercode_bm4pfp7w = "OP";
	if (op5_bm4pfp7w) {
		browserversion_bm4pfp7w = "5";
	} else if (op6_bm4pfp7w) {
		browserversion_bm4pfp7w = "6";
	} else if (op7_bm4pfp7w) {
		browserversion_bm4pfp7w = "7";
	} else if (op8_bm4pfp7w) {
		browserversion_bm4pfp7w = "8";
	} else if (op9_bm4pfp7w) {
		browserversion_bm4pfp7w = "9";
	} else if (op10_bm4pfp7w) {
		browserversion_bm4pfp7w = "10";
	} else {
		browserversion_bm4pfp7w = appVersion_bm4pfp7w;
	}
	browsername_bm4pfp7w = "Opera";
} else if (moz_bm4pfp7w) {
	browsercode_bm4pfp7w = "MO";
	browserversion_bm4pfp7w = appVersion_bm4pfp7w;
	browsername_bm4pfp7w = "Firefox";
} else if (ie_bm4pfp7w) {
	browsercode_bm4pfp7w = "IE";
	if (ie4_bm4pfp7w) {
		browserversion_bm4pfp7w = "4";
	} else if (ie5_bm4pfp7w) {
		browserversion_bm4pfp7w = "5";
	} else if (ie6_bm4pfp7w) {
		browserversion_bm4pfp7w = "6";
	} else if (ie7_bm4pfp7w) {
		browserversion_bm4pfp7w = "7";
	} else if (ie8_bm4pfp7w) {
		browserversion_bm4pfp7w = "8";
	} else {
		browserversion_bm4pfp7w = appVersion_bm4pfp7w;
	}
	browsername_bm4pfp7w = "Internet Explorer";
}

if (windows_bm4pfp7w) {
	operatingsys_bm4pfp7w = "Windows";
} else if (linux_bm4pfp7w) {
	operatingsys_bm4pfp7w = "Linux";
} else if (mac_bm4pfp7w) {
	operatingsys_bm4pfp7w = "Mac";
} else {
	operatingsys_bm4pfp7w = "Unkown";
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

function browserObject_bm4pfp7w(objid)
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

function doRand_bm4pfp7w()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
}

function getCookie_bm4pfp7w(name) {
	var crumb = document.cookie;
	var index = crumb.indexOf(name + "=");
	if (index == -1) return null;
	index = crumb.indexOf("=", index) + 1;
	var endstr = crumb.indexOf(";", index);
	if (endstr == -1) endstr = crumb.length;
	return unescape(crumb.substring(index, endstr));
}

function deleteCookie_bm4pfp7w(name) {
	var expiry = new Date();
	document.cookie = name + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT" +  "; path=/";
}

function elapsedTime_bm4pfp7w()
{
	if (typeof _elapsedTimeStatusIndicator == 'undefined') {
		_elapsedTimeStatusIndicator = 'bm4pfp7w';
	} else if (typeof _elapsedTimeStatusIndicator == 'string' && _elapsedTimeStatusIndicator != 'bm4pfp7w') {

		return;
	}


	if (timer_bm4pfp7w < 3600)
	{
		timer_bm4pfp7w++;
		imagefetch_bm4pfp7w++;

		if (imagefetch_bm4pfp7w > (19 + (imagefetchincr_bm4pfp7w * imagefetchincrcount_bm4pfp7w))) {
			imagefetch_bm4pfp7w = 0;
			imagefetchincrcount_bm4pfp7w++;
			doStatusLoop_bm4pfp7w();
		}

					setTimeout("elapsedTime_bm4pfp7w();", 1000);
			}
}


var Base64_bm4pfp7w = {
	_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
	encode : function (input) {
		var output = "";
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
		var i = 0;

		input = Base64_bm4pfp7w._utf8_encode(input);

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

function doStatusLoop_bm4pfp7w() {
	date1 = new Date();
	var _finalPageTitle=Base64_bm4pfp7w.encode(title);

	var _finalWindowLocation = encodeURIComponent(decodeURIComponent(window.location));
	var _referrerURL = encodeURIComponent(decodeURIComponent(document.referrer));
	updateurl_bm4pfp7w = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/UpdateFootprint/_time="+date1.getTime()+"/_randomNumber="+doRand_bm4pfp7w()+"/_url="+_finalWindowLocation+"/_isFirstTime="+encodeURIComponent(isfirsttime_bm4pfp7w)+"/_sessionID="+encodeURIComponent(sessionid_bm4pfp7w)+"/_referrer="+_referrerURL+"/_resolution="+encodeURIComponent(screenWidth_bm4pfp7w+"x"+screenHeight_bm4pfp7w)+"/_colorDepth="+encodeURIComponent(colorDepth_bm4pfp7w)+"/_platform="+encodeURIComponent(navigator.platform)+"/_appVersion="+encodeURIComponent(navigator.appVersion)+"/_appName="+encodeURIComponent(navigator.appName)+"/_browserCode="+encodeURIComponent(browsercode_bm4pfp7w)+"/_browserVersion="+encodeURIComponent(browserversion_bm4pfp7w)+"/_browserName="+encodeURIComponent(browsername_bm4pfp7w)+"/_operatingSys="+encodeURIComponent(operatingsys_bm4pfp7w)+"/_pageTitle="+encodeURIComponent(_finalPageTitle)+"/_hasNotes="+encodeURIComponent(hasnotes_bm4pfp7w)+"/_repeatVisit="+encodeURIComponent(repeatvisit_bm4pfp7w)+"/_lastVisitTimeline="+encodeURIComponent(lastvisittimeline_bm4pfp7w)+"/_lastChatTimeline="+encodeURIComponent(lastchattimeline_bm4pfp7w)+"/_isNewSession="+encodeURIComponent(isnewsession_bm4pfp7w)+"/_geoIP_3="+encodeURIComponent(geoip_bm4pfp7w[3])+"/_geoIP_4="+encodeURIComponent(geoip_bm4pfp7w[4])+"/_geoIP_2="+encodeURIComponent(geoip_bm4pfp7w[2])+"/_geoIP_5="+encodeURIComponent(geoip_bm4pfp7w[5])+"/_geoIP_12="+encodeURIComponent(geoip_bm4pfp7w[12])+"/_geoIP_6="+encodeURIComponent(geoip_bm4pfp7w[6])+"/_geoIP_1="+encodeURIComponent(geoip_bm4pfp7w[1])+"/_geoIP_7="+encodeURIComponent(geoip_bm4pfp7w[7])+"/_geoIP_8="+encodeURIComponent(geoip_bm4pfp7w[8])+"/_geoIP_9="+encodeURIComponent(geoip_bm4pfp7w[9])+"/_geoIP_10="+encodeURIComponent(geoip_bm4pfp7w[10])+"/_geoIP_11="+encodeURIComponent(geoip_bm4pfp7w[11])+"/_geoIP_13="+encodeURIComponent(geoip_bm4pfp7w[13]);

	proactiveImageUse_bm4pfp7w = new Image();
	proactiveImageUse_bm4pfp7w.onload = imageLoaded_bm4pfp7w;
	proactiveImageUse_bm4pfp7w.src = updateurl_bm4pfp7w;

	isfirsttime_bm4pfp7w = 0;
}

function startChat_bm4pfp7w(proactive)
{
	isChatRunning_bm4pfp7w = 1;

	docWidth = (winW-599)/2;
	docHeight = (winH-679)/2;

		_chatWindowURL = 'https://support.aut.ac.ir/visitor/index.php?/LiveChat/Chat/Request/_sessionID=' + sessionid_bm4pfp7w + '/_proactive=' + proactive + '/_filterDepartmentID=/_randomNumber=' + doRand_bm4pfp7w() + '/_fullName=/_email=/_promptType=chat';
	

	chatwindow = window.open(_chatWindowURL,"customerchat"+doRand_bm4pfp7w(), "toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=yes,resizable=1,width=599,height=679,left="+docWidth+",top="+docHeight);

	hideProactiveChatData_bm4pfp7w();
}

function imageLoaded_bm4pfp7w() {
	if (!proactiveImageUse_bm4pfp7w)
	{
		return;
	}
	proactiveAction = proactiveImageUse_bm4pfp7w.width;

	if (proactiveAction == 3)
	{
		doProactiveInline_bm4pfp7w();
	} else if (proactiveAction == 4) {
		displayProactiveChatData_bm4pfp7w();
	}
}

function writeInlineRequestData_bm4pfp7w()
{
	docWidth = (winW-600)/2;
	docHeight = (winH-680)/2;

	var divData = '';
	divData += "<div style=\"float: left; width: 600px;\"><iframe width=\"600\" height=\"680\" scrolling=\"auto\" frameborder=\"0\" src=\"\" name=\"inlinechatframe\" id=\"inlinechatframe\">error: no iframe support detected</iframe></div><div id=\"inlinechatclosebutton\" style=\"float: left; margin-left: -30px; margin-top: -2px;\"><a href=\"javascript: closeInlineProactiveRequest_bm4pfp7w();\"><i style=\"color:red;\" class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i></a></div>";

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

function writeProactiveRequestData_bm4pfp7w()
{
	docWidth = (winW-450)/2;
	docHeight = (winH-400)/2;

	var divData = '';
	divData += "<div style=\"float: left; width: 500px; background: #ffffff url(\'https://support.aut.ac.ir/__swift/themes/client/images/mainbackground.gif\') repeat; border: solid 1px #bababa;\">	<div style=\"background: #ffffff url(\'https://support.aut.ac.ir/__swift/themes/client/images/icon_proactiveuserbackground.gif\') no-repeat bottom left; border: solid 1px #bababa; margin: 8px;\">		<div style=\"text-align: center;margin-top: 15px;margin-bottom: 10px;\"><img align=\"absmiddle\" border=\"0\" src=\"https://support.aut.ac.ir/__swift/files/file_a1rdsripf2ndrrj.png\"></div>		<hr style=\"border: solid #d8dbdf; border-width: 1px 0 0; clear: both; height: 0; margin: 0; text-align: center\">		<div style=\"padding-left: 100px; text-align: center; margin-top: 20px; height: 60px; overflow: hidden; font: 40px \'segoe ui\',\'helvetica neue\', arial, helvetica, sans-serif; color: #128dbe;width: 350px;\">			میتونم کمکتون کنم؟		</div>		<div style=\"padding-left: 100px; vertical-align: top; margin-top: 0px; padding-top: 0px; height: 180px; font: 18pt \'segoe ui\',\'helvetica neue\', arial, helvetica, sans-serif; color: #4c5156;width: 350px;\">			تیم ما آماده است تا به شما کمک کند. روی  &quot;گفتگو&quot; کلیک کنید.<br>			<div style=\"padding-top: 30px; padding-left: 90px; text-align: center;\">				<div onclick=\"javascript:doProactiveRequest_bm4pfp7w();\" style=\"font-weight: normal;font-size: 19px;color: #5d9928;padding: 10px 25px 10px 25px;background-color: #fff;background: -moz-linear-gradient(top,#fafafa 0%,#e7ebf0);background: -webkit-gradient(linear, left top, left bottom, from(#ffffff),to(#f3f3f3));-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;border: 1px solid #cdd2d4;-moz-box-shadow: 0px 1px 1px #f8f8f8,inset 0px 1px 1px #fff;-webkit-box-shadow: 0px 1px 1px #f8f8f8,inset 0px 1px 1px #fff;box-shadow: 0px 1px 1px #f8f8f8,inset 0px 1px 1px #fff;text-shadow: 0px 1px 0px #fff;cursor: pointer;width: 100px;\">					گفتگو				</div>			</div>		</div>	</div></div><div style=\"float: left; margin-left: -8px; margin-top: -8px;\">	<a href=\"javascript:closeProactiveRequest_bm4pfp7w();\"><img align=\"absmiddle\" border=\"0\" src=\"https://support.aut.ac.ir/__swift/themes/client/images/icon_close.png\"></a></div>";

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

function displayProactiveChatData_bm4pfp7w()
{
	if (proactiveAnimate == true) {
		return false;
	}

	writeObj = browserObject_bm4pfp7w("proactivechatdiv");
	if (writeObj)
	{
		docWidth = (winW-450)/2;
		docHeight = (winH-400)/2;
		proactiveY = docHeight;
		writeObj.top = docWidth;
		writeObj.left = docHeight;
		proactiveAnimate = true;
	}

	showDisplay_bm4pfp7w("proactivechatdiv");

		animateProactiveDiv_bm4pfp7w();
	}

function displayInlineChatData_bm4pfp7w()
{
	writeObj = browserObject_bm4pfp7w("inlinechatdiv");
	if (writeObj)
	{
		docWidth = (winW-600)/2;
		docHeight = (winH-680)/2;
		proactiveY = docHeight;
		writeObj.top = docHeight;
		writeObj.left = docWidth;

		acceptProactive = new Image();
		acceptProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_bm4pfp7w()+"/_sessionID="+sessionid_bm4pfp7w;

		inlineChatFrameObj = browserObject_bm4pfp7w("inlinechatframe");
		_iframeURL = 'https://support.aut.ac.ir/visitor/index.php?/LiveChat/Chat/StartInline/_sessionID=E9GC2DbbVY8ZX4u6ac691566e0a46531b1e7931e5b9996810d11f93krWtvRqtcpL9hu44ZgpU7eKG5o/_proactive=1/_filterDepartmentID=/_fullName=/_email=/_inline=1/';
		if (inlineChatFrameObj && inlineChatFrameObj.src != _iframeURL && writeObj.style.display == 'none') {
			inlineChatFrameObj.src = _iframeURL;
		}
	}

	showDisplay_bm4pfp7w("inlinechatdiv");
}

function hideProactiveChatData_bm4pfp7w()
{
	hideDisplay_bm4pfp7w("proactivechatdiv");
	hideDisplay_bm4pfp7w("inlinechatdiv");
}

function doProactiveInline_bm4pfp7w()
{
	displayInlineChatData_bm4pfp7w();
}

function doProactiveRequest_bm4pfp7w()
{
	acceptProactive = new Image();
	acceptProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_bm4pfp7w()+"/_sessionID="+sessionid_bm4pfp7w;

	startChat_bm4pfp7w("4");
}

function closeProactiveRequest_bm4pfp7w()
{
	rejectProactive = new Image();
	date1 = new Date();
	proactiveAnimate = false;
	rejectProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_bm4pfp7w()+"/_sessionID="+sessionid_bm4pfp7w;

	hideProactiveChatData_bm4pfp7w();
}

function closeInlineProactiveRequest_bm4pfp7w()
{
	rejectProactive = new Image();
	date1 = new Date();
	rejectProactive.src = "https://support.aut.ac.ir/visitor/index.php?/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_bm4pfp7w()+"/_sessionID="+sessionid_bm4pfp7w;

	document.getElementById('inlinechatframe').contentWindow.postMessage('CloseProactiveChat', '*');
	//	window.frames.inlinechatframe.CloseProactiveChat();
}

function closeInlineProactiveRequest2_bm4pfp7w()
{
	var bodyElement = document.getElementsByTagName('body');
	if (bodyElement[0])
	{
		var inlineDivElement = browserObject_bm4pfp7w('inlinechatdiv');
		if (inlineDivElement) {
			var _parentNode = inlineDivElement.parentNode;
			_parentNode.removeChild(inlineDivElement);
		}
	}
}

	window.onmessage = function(e){
	if (e.data == 'CloseProactiveChat') {
	closeInlineProactiveRequest2_bm4pfp7w();
	}
	};

function switchDisplay_bm4pfp7w(objid)
{
	result = browserObject_bm4pfp7w(objid);
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

function hideDisplay_bm4pfp7w(objid)
{
	result = browserObject_bm4pfp7w(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "none";
}

function showDisplay_bm4pfp7w(objid)
{
	result = browserObject_bm4pfp7w(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "block";
}

function updateProactivePosition_bm4pfp7w()
{
	writeObj = browserObject_bm4pfp7w("proactivechatdiv");
	writeObjInline = browserObject_bm4pfp7w("inlinechatdiv");

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

function animateProactiveDiv_bm4pfp7w()
{
	writeObj = browserObject_bm4pfp7w("proactivechatdiv");

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
		setTimeout('animateProactiveDiv_bm4pfp7w()', proactiveDelayTime);
	}
}

	writeProactiveRequestData_bm4pfp7w(); writeInlineRequestData_bm4pfp7w();

elapsedTime_bm4pfp7w();

var oldEvtScroll = window.onscroll; window.onscroll = function() { if (oldEvtScroll) { updateProactivePosition_bm4pfp7w(); } }

var swifttagdiv=document.createElement("div");swifttagdiv.innerHTML = "<style type=\"text/css\">#kayako_sitebadgebg:hover {	background-color: #bec0c5 !important;}#kayako_sitebadgebg {	background-color: #a2a4ac;	border-color: #bec0c5 #717378 #717378 #717378 !important;}</style><div id=\"kayako_sitebadgecontainer\" title=\"گفتگو آنلاین در دسترس نیست. برای گذاشتن پیام کلیک کنید.\" onclick=\"javascript: startChat_bm4pfp7w(\'0\');\" style=\"background: transparent none repeat scroll 0 0; bottom: 0; cursor:pointer; height: 101px; left: 0; line-height: normal; margin: 0; padding: 0; position: fixed; top: 35% !important; z-index: 4000000000 !important;\">	<div id=\"kayako_sitebadgeholder\">		<div id=\"kayako_sitebadgeindicator\" style=\"background: transparent URL(\'https://support.aut.ac.ir/__swift/themes/client/images/icon_badge_gray.png\') no-repeat scroll 0 0; width: 30px; height: 30px; line-height: normal; margin: 0; padding: 0; position: absolute; left: 10px; top: -8px; z-index: 20000;\"></div>		<div id=\"kayako_sitebadgebg\" id=\"kayako_sitebadgebg\" style=\"background-color: #a2a4ac; border-color: #bec0c5 #717378 #717378 #717378 !important; background-image: URL(\'https://support.aut.ac.ir/__swift/themes/client/images/badge_livehelp_en_white.png\'); background-position: 1px 8px; background-repeat: no-repeat; -moz-border-radius: 0 1em 1em 0 !important; border-radius: 0 1em 1em 0 !important; -webkit-border-radius: 0 1em 1em 0 !important; border-style: outset outset outset none !important; border-width: 1px 1px 1px medium !important; height: 101px !important; left: 0 !important; margin: 0 !important; opacity: 0.90 !important; padding: 0 !important; position: absolute !important; top: 0 !important; width: 30px !important; z-index: 19999 !important;\"></div>	</div></div>";document.getElementById("swifttagdatacontainert5i5br5oo5").appendChild(swifttagdiv);