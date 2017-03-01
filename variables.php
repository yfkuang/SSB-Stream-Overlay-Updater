<?php
	session_start();
	
	$_SESSION['gametype'] = $_GET['gametype'];
	$_SESSION['style'] = $_GET['style'];
	
	$_SESSION['playerLeft'] = $_GET['playerLeft'];
	$_SESSION['characterLeft'] = $_GET['characterLeft'];
	$_SESSION['scoreLeft'] = $_GET['scoreLeft'];
	
	$_SESSION['playerRight'] = $_GET['playerRight'];
	$_SESSION['characterRight'] = $_GET['characterRight'];
	$_SESSION['scoreRight'] = $_GET['scoreRight'];
	
	$_SESSION['player1Team1'] = $_GET['player1Team1'];
	$_SESSION['player2Team1'] = $_GET['player2Team1'];
	$_SESSION['colorTeam1'] = $_GET['colorTeam1'];
	$_SESSION['scoreTeam1'] = $_GET['scoreTeam1'];
	
	$_SESSION['player1Team2'] = $_GET['player1Team2'];
	$_SESSION['player2Team2'] = $_GET['player2Team2'];
	$_SESSION['colorTeam2'] = $_GET['colorTeam2'];
	$_SESSION['scoreTeam2'] = $_GET['scoreTeam2'];
	
	$_SESSION['commentatorLeft'] = $_GET['commentatorLeft'];
	$_SESSION['twitterLeft'] = $_GET['twitterLeft'];
	
	$_SESSION['commentatorRight'] = $_GET['commentatorRight'];
	$_SESSION['twitterRight'] = $_GET['twitterRight'];
	
	$_SESSION['winnerssemi1'] = $_GET['winnerssemi1'];
	$_SESSION['winnerssemi2'] = $_GET['winnerssemi2'];
	$_SESSION['winnerssemi3'] = $_GET['winnerssemi3'];
	$_SESSION['winnerssemi4'] = $_GET['winnerssemi4'];
	
	$_SESSION['loserstop1'] = $_GET['loserstop1'];
	$_SESSION['loserstop2'] = $_GET['loserstop2'];
	$_SESSION['loserstop3'] = $_GET['loserstop3'];
	$_SESSION['loserstop4'] = $_GET['loserstop4'];
	
	$_SESSION['winnersfinals1'] = $_GET['winnersfinals1'];
	$_SESSION['winnersfinals2'] = $_GET['winnersfinals2'];
	$_SESSION['grandfinals1'] = $_GET['grandfinals1'];
	$_SESSION['grandfinals2'] = $_GET['grandfinals2'];
	
	$_SESSION['losersquart1'] = $_GET['losersquart1'];
	$_SESSION['losersquart2'] = $_GET['losersquart2'];
	$_SESSION['losersquart3'] = $_GET['losersquart3'];
	$_SESSION['losersquart4'] = $_GET['losersquart4'];
	
	$_SESSION['loserssemis1'] = $_GET['loserssemis1'];
	$_SESSION['loserssemis2'] = $_GET['loserssemis2'];
	
	$_SESSION['losersfinals1'] = $_GET['losersfinals1'];
	$_SESSION['losersfinals2'] = $_GET['losersfinals2'];
?>