<?php
function green() {
	echo "
	<style>
		@font-face {
			font-family: 'Open Sans';
			src: url(../font/OpenSans-Regular.ttf);
		}
		body {
			background: url('img/green.png');
			background-repeat: no-repeat;
			background-size: 1280px 720px;
			height: 720px;
			width: 1280px;
			position: absolute;
			left: 0;
			top: 0;
			margin: 0;
			font-family: 'Open Sans';
			color: white;
		}
		@keyframes fade {
			0%, 50% {opacity: 0;}
			100% {opacity: 1;}	
		}
		
		@keyframes left {
			0%, 50% {
				transform: translateX(10px);
				transform: translateX(10px);
			}
			100% {transform: translateX(0px);}
		}
		
		@keyframes right {
		
		}	
		
		h2, h3, p {
			display: inline;
			text-transform: uppercase;
		}
		
		h2 {
			font-weight: 600;
			letter-spacing: 3px;
			
			animation-name: fade;
			animation-duration: 1s;
		}
		
		h3 {
			animation-name: fade;
			animation-duration: 1s;	
		}
		
		p {
			letter-spacing: 2px;
		}
		
		h3 {
			font-size: 18pt;
		}
		
		#playerInfo {
			width: 876px;
			position: absolute;
			left: 0;
			right: 0;
		}
		
		.players {
			width: 420px;
			position: absolute;	
			top: -8px;
		}
		
		.players h3{
			position: relative;
			top: 5px;	
		}
		
		.players img {
			position: relative;
			top: 6px;
			height: 24px;
		}
		
		#playerLeft {
			left: 0;
			padding-left: 15px;	
		}
		
		#playerLeft h3{
			padding-right: 30px;
		}
		
		#playerLeft p {
			animation-name: left;
			animation-duration: 1s;	
		}
		
		#playerLeft img {
			padding-right: 10px;
		}
		
		#playerRight {
			right: 0;
			text-align: right;
			padding-right: 20px;	
		}
		
		#playerRight h3{
			padding-left: 30px;;
		}
		
		#playerRight img {
			padding-left: 10px;
		}
		
		#gametype {
			position: absolute;
			right: 0;
			width: 403px;
			text-align: center;
			padding-top: 232px;
		}
		
		
	</style>
	";
}
?>