// JavaScript Document
function init() {
	"use strict";
	var $mode = "on";
	
	$("#simple-mode").click(function() {
		switch($mode) {
			case "on":
				$mode = "off";
				$("header").animate({
					top: "-76px",
				}, 250);
				$("header").delay(500).css("display", "none");
				$("footer").animate({
					opacity: "0",
				}, 250);
				$("footer").delay(300).css("display", "none");
				$("#content").animate({
					"margin-top": "10px",
				}, 250);
				$("body").css("background", "white");
				
				break;
			case "off":
				$mode = "on";
				$("header").css("display", "block");
				$("header").animate({
					top: "0",
				}, 250);
				$("footer").css("display", "block");
				$("footer").animate({
					opacity: "1",
				}, 250);
				$("#content").animate({
					"margin-top": "90px",
				}, 250);
				$("body").css("background", "url(img/bg.jpg)");
				
				break;
			default:
				$mode = "off";
				$("header").animate({
					top: "-76px",
				}, 250);
				$("header").delay(500).css("display", "none");
				$("footer").animate({
					opacity: "0",
				}, 250);
				$("footer").delay(300).css("display", "none");
				$("#content").animate({
					"margin-top": "10px",
				}, 250);
				$("body").css("background", "white");
		}
	});
	
	$("h3").click(function() {
		$(this).parent().children(".playerContainer").toggle(250);
	});
}