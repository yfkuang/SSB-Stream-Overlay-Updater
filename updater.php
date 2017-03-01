<?php
	session_start();
?>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	Melee Stream Overlay Updater allows Open Broadcaster Software users 
    to generate an overlay and easily update player information.
    
    Copyright (C) 2016 Ye Fang Kuang <contact@yfkuang.com>

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see http://www.gnu.org/licenses.
////////////////////////////////////////////////////////////////////-->
<html>
<head>
	<title>Streamland | SSB Stream Overlay Updater</title>
	<link href="css/updater.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
    <script src="js/fns.js"></script>
	<script>
		$(document).ready(function(){
		   var $form = $('form');
		   $form.submit(function(){
			  $.get($(this).attr('action'), $(this).serialize(), function(response){
					console.log('success')
			  },'json');
			  return false;
		   });
		   
		   init();
		});
	</script>
</head>
<body>
	<header>
    	<img class="logo" src="img/logo_banner.png" height="105" alt="Streamland">
        <ul>
        	<li><a href="https://www.youtube.com/channel/UChKjY0bYjdBLYoLO0KPUyJA">
            	<!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In  -->
                <svg version="1.1" id="link-youtube"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="1021.4px" height="718.4px" viewBox="0 0 1021.4 718.4"
                     style="overflow:scroll;enable-background:new 0 0 1021.4 718.4;" xml:space="preserve">
                <defs>
                </defs>
                <g id="Lozenge_2_">
                    <g>
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="510.7243" y1="1.562500e-06" x2="510.7243" y2="718.4229">
                            <stop  offset="0" style="stop-color:#E52D27"/>
                            <stop  offset="1" style="stop-color:#BF171D"/>
                        </linearGradient>
                        <path class="st0" d="M1011.2,155c0,0-10-70.4-40.6-101.4c-38.8-40.7-82.4-40.9-102.3-43.3C725.4,0,510.9,0,510.9,0h-0.4
                            c0,0-214.4,0-357.4,10.3c-20,2.4-63.5,2.6-102.3,43.3C20.2,84.6,10.2,155,10.2,155S0,237.6,0,320.3v77.5
                            c0,82.7,10.2,165.3,10.2,165.3s10,70.4,40.6,101.4c38.9,40.7,89.9,39.4,112.6,43.7c81.7,7.8,347.3,10.3,347.3,10.3
                            s214.6-0.3,357.6-10.7c20-2.4,63.5-2.6,102.3-43.3c30.6-31,40.6-101.4,40.6-101.4s10.2-82.7,10.2-165.3v-77.5
                            C1021.4,237.6,1011.2,155,1011.2,155z M405.3,491.7l0-287l276,144L405.3,491.7z"/>
                    </g>
                </g>
                </svg>
			</a></li>
            <li><a href="http://twitch.tv/streamlandssb">
            	<!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In  -->
                <svg version="1.1" id="link-twitch"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="128px" height="134px" viewBox="0 0 128 134" style="overflow:scroll;enable-background:new 0 0 128 134;"
                     xml:space="preserve">
                <defs>
                </defs>
                <path class="st0" d="M9,0L0,23v94h32v17h18l17-17h26l35-35V0H9z M116,76L96,96H64l-17,17V96H20V12h96V76z M96,35v35H84V35H96z
                     M64,35v35H52V35H64z"/>
                </svg>
            </a></li>
            <li><a href="http://twitter.com/streamlandssb">
            	<!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In  -->
                <svg version="1.1" id="link-twitter"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="273.4px" height="222.2px" viewBox="0 0 273.4 222.2"
                     style="overflow:scroll;enable-background:new 0 0 273.4 222.2;" xml:space="preserve">
                <defs>
                </defs>
                <path class="st0" d="M273.4,26.3c-10.1,4.5-20.9,7.5-32.2,8.8c11.6-6.9,20.5-17.9,24.7-31C255,10.5,243,15.2,230.2,17.7
                    C220,6.8,205.4,0,189.3,0c-31,0-56.1,25.1-56.1,56.1c0,4.4,0.5,8.7,1.5,12.8C88,66.5,46.7,44.2,19,10.3c-4.8,8.3-7.6,17.9-7.6,28.2
                    c0,19.5,9.9,36.6,25,46.7c-9.2-0.3-17.8-2.8-25.4-7c0,0.2,0,0.5,0,0.7c0,27.2,19.3,49.8,45,55c-4.7,1.3-9.7,2-14.8,2
                    c-3.6,0-7.1-0.4-10.6-1c7.1,22.3,27.9,38.5,52.4,39c-19.2,15-43.4,24-69.7,24c-4.5,0-9-0.3-13.4-0.8c24.8,15.9,54.3,25.2,86,25.2
                    c103.2,0,159.6-85.5,159.6-159.6c0-2.4-0.1-4.9-0.2-7.3C256.4,47.4,265.9,37.5,273.4,26.3z"/>
                </svg>
            </a></li>
        </ul>
    </header>
    <div id="content" class="wrapper">
    	<input type="button" value="Toggle Simple Mode" id="simple-mode">
        <br>
	    <h1>SSB Stream Overlay Updater</h1>
        <form action="variables.php" method="get">
        	
            <div>
            	<h3>Game Info</h3>
                <div class="playerContainer">
                    <fieldset>
                        <input type="text" name="gametype" placeholder="Game Type, ie: Melee Singles, Wii U Semi Finals..."><br>
                        <h4>Overlay Style</h4>
                        <select name="style">
                            <option value="green">Basic Green</option>
                            <option value="red">Basic Red</option>
                            <option value="blue">Basic Blue</option>
                            <option value="white">Basic White</option>
                            <option value="black">Basic Black</option>
                        </select>
                    </fieldset>
                    <br>
            	</div>
            </div>
            
            <div>
            <h3>Singles</h3>
                <div class="playerContainer">
                    <fieldset class="playerLeft">
                        <legend>Player Left</legend>
                        <input type="text" name="playerLeft" placeholder="Player 1"><br>
                        <h4>Character</h4>
                        <select name="characterLeft">
                            <option value="bowser">bowser</option>
                            <option value="cfalcon">cfalcon</option>
                            <option value="dk">dk</option>
                            <option value="doc">doc</option>
                            <option value="falco">falco</option>
                            <option value="fox">fox</option>
                            <option value="ganon">ganon</option>
                            <option value="gw">gw</option>
                            <option value="ic">ic</option>
                            <option value="kirby">kirby</option>
                            <option value="link">link</option>
                            <option value="luigi">luigi</option>
                            <option value="mario">mario</option>
                            <option value="marth">marth</option>
                            <option value="mewtwo">mewtwo</option>
                            <option value="ness">ness</option>
                            <option value="peach">peach</option>
                            <option value="pichu">pichu</option>
                            <option value="pikachu">pikachu</option>
                            <option value="puff">puff</option>
                            <option value="roy">roy</option>
                            <option value="samus">samus</option>
                            <option value="sheik">sheik</option>
                            <option value="ylink">ylink</option>
                            <option value="yoshi">yoshi</option>
                            <option value="zelda">zelda</option>
                        </select><br>
                        <h4>Score</h4>
                        <input type="number" step="1" min="0" max="2" value="0" name="scoreLeft"><br>
                    </fieldset>
                    <fieldset class="playerRight">
                        <legend>Player Right</legend>
                        <input type="text" name="playerRight" placeholder="Player 1"><br>
                        <h4>Character</h4>
                        <select name="characterRight">
                            <option value="bowser">bowser</option>
                            <option value="cfalcon">cfalcon</option>
                            <option value="dk">dk</option>
                            <option value="doc">doc</option>
                            <option value="falco">falco</option>
                            <option value="fox">fox</option>
                            <option value="ganon">ganon</option>
                            <option value="gw">gw</option>
                            <option value="ic">ic</option>
                            <option value="kirby">kirby</option>
                            <option value="link">link</option>
                            <option value="luigi">luigi</option>
                            <option value="mario">mario</option>
                            <option value="marth">marth</option>
                            <option value="mewtwo">mewtwo</option>
                            <option value="ness">ness</option>
                            <option value="peach">peach</option>
                            <option value="pichu">pichu</option>
                            <option value="pikachu">pikachu</option>
                            <option value="puff">puff</option>
                            <option value="roy">roy</option>
                            <option value="samus">samus</option>
                            <option value="sheik">sheik</option>
                            <option value="ylink">ylink</option>
                            <option value="yoshi">yoshi</option>
                            <option value="zelda">zelda</option>
                        </select><br>
                        <h4>Score</h4>
                        <input type="number" step="1" min="0" max="2" value="0" name="scoreRight"><br>
                    </fieldset>
                    <br class="clear">
                    <input type="submit" value="Update">
                </div>
                
                <div>
                    <h3>Doubles</h3>
                    <div class="playerContainer">
                      <fieldset class="playerLeft">
                            <legend>Team 1</legend>
                            <input type="text" name="player1Team1" placeholder="Player 1"><br>
                            <input type="text" name="player2Team1" placeholder="Player 2"><br>
                            <h4>Color</h4>
                            <select name="colorTeam1">
                                <option value="red">red</option>
                                <option value="blue">blue</option>
                                <option value="green">green</option>
                            </select><br>
                            <h4>Score</h4>
                            <input type="number" step="1" min="0" max="2" value="0" name="scoreTeam1"><br>
                      </fieldset>
                        <fieldset class="playerRight">
                            <legend>Team 2</legend>
                          <input type="text" name="player1Team2" placeholder="Player 1"><br>
                          <input type="text" name="player2Team2" placeholder="Player 2"><br>
                            <h4>Color</h4>
                          <select name="colorTeam2">
                                <option value="red">red</option>
                                <option value="blue">blue</option>
                                <option value="green">green</option>
                          </select><br>
                            <h4>Score</h4>
                          <input type="number" step="1" min="0" max="2" value="0" name="scoreTeam2"><br>
                      </fieldset>
                      <br class="clear">
                      <input type="submit" value="Update">
                    </div>
                </div>
                
                <div>
                    <h3>Commentators</h3>
                    <div class="playerContainer">
                        <fieldset class="playerLeft">
                            <legend>Commentator Left</legend>
                            <input type="text" name="commentatorLeft" placeholder="Leftside Commentator"><br>
                            <h4>Twitter</h4>
                            <input type="text" name="twitterLeft" placeholder="Leftside Twitter"><br>
                        </fieldset>
                        <fieldset class="playerRight">
                            <legend>Commentator Right</legend>
                            <input type="text" name="commentatorRight" placeholder="Rightside Commentator"><br>
                            <h4>Twitter</h4>
                            <input type="text" name="twitterRight" placeholder="Rightside Twitter"><br>
                        </fieldset>
                        <br class="clear">
                        <input type="submit" value="Update">
                    </div>
                </div>
                
                <div>
                	<h3>Top 8 Bracket</h3>
                	<div class="playerContainer">
                        <fieldset class="playerLeft">
                            <legend>Winners Top 8</legend>
                            <input type="text" name="winnerssemi1" value="<span>Player 1</span>"><br>
                            <input type="text" name="winnerssemi2" value="<span>Player 2</span>"><br>
                            <input type="text" name="winnerssemi3" value="<span>Player 3</span>"><br>
                            <input type="text" name="winnerssemi4" value="<span>Player 4</span>"><br>
                        </fieldset>
                        <fieldset class="playerRight">
                            <legend>Losers Top 8</legend>
                            <input type="text" name="loserstop1" value="<span>Player 5</span>"><br>
                            <input type="text" name="loserstop2" value="<span>Player 6</span>"><br>
                            <input type="text" name="loserstop3" value="<span>Player 7</span>"><br>
                            <input type="text" name="loserstop4" value="<span>Player 8</span>"><br>
                        </fieldset>
                	</div>
                    <div class="playerContainer">
                        <fieldset class="playerRight">
                            <legend>Winners Bracket</legend>
                            <h4>Winners Finals</h4>
                            <input type="text" name="winnersfinals1" value="<span>Winner of W. Semis</span>"><br>
                            <input type="text" name="winnersfinals2" value="<span>Winner of W. Semis</span>"><br>
                            <h4>Grand Finals</h4>
                            <input type="text" name="grandfinals1" value="<span>Winner of W. Finals</span>"><br>
                            <input type="text" name="grandfinals2" value="<span>Winner of L. Finals</span>"><br>
                        </fieldset>
                        <fieldset class="playerLeft">
                          <legend>Losers Bracket</legend>
                            <h4>Losers Quarters</h4>
                            <input type="text" name="losersquart1" value="<span>Loser of W. Semis</span>"><br>
                            <input type="text" name="losersquart2" value="<span>Winner of L. Top 8</span>"><br>
                            <input type="text" name="losersquart3" value="<span>Loser of W. Semis</span>"><br>
                            <input type="text" name="losersquart4" value="<span>Winner of L. Top 8</span>"><br>
                            <h4>Losers Semis</h4>
                            <input type="text" name="loserssemis1" value="<span>Winner of L. Quarters</span>"><br>
                            <input type="text" name="loserssemis2" value="<span>Winner of L. Quarters</span>"><br>
                            <h4>Losers Finals</h4>
                          <input type="text" name="losersfinals1" value="<span>Loser of W. Finals</span>"><br>
                          <input type="text" name="losersfinals2" value="<span>Winner of L. Semis</span>"><br>
                        </fieldset>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <input type="submit" value="Update">
                    </div>
                </div>
                
                <br class="clear">
            </div>
        </form>
        <br>
        <a href="overlay.php" target="_blank">Go To Singles Overlay</a><br>
        <a href="">Go To Doubles (Coming Soon)</a><br>
        <a href="">Go To Commentators (Coming Soon)</a><br>
        <a href="">Go To Top 8 Bracket (Coming Soon)</a>
    </div>
    <footer>
	    <div class="wrapper">
        <?php
			$file = fopen("Changelog.txt", "r") or die("UNLIMITED POWER (error, my dude)");
			$ver = fgets($file);
			fclose($file);
		
			echo '
        	<p>SSB Stream Overlay Updater by <a href="http://yfkuang.com">Ye Fang Kuang</a>. <a href="mailto:kuangyefang@live.ca">Email me</a> or PM me on <a href="http://reddit.com/u/morron88">Reddit</a> if you want your overlay to be added. <a href="changelog.txt.">Version '.$ver.'</a>. Licensed under <a href="https://www.gnu.org/licenses/gpl.txt">GNU Gneral Public License Version 3</a>.
			<br><br>
			&copy; 2016-'.date('Y').' Streamland. Streamland Logo is the intellectual property of Streamland and Ye Fang Kuang.</p>
			';
		?>
        </div>
    </footer>
</body>
</html>