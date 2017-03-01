<?php
	session_start();
	include 'style_fns.php';
?>
<html>
	<head>
		<?php
			if($_SESSION['style'] == 'green'){
				green();
			}
		?>
	</head>
	<body>
		<div id="playerInfo">
			<div id="playerLeft" class="players">
				<?php
					echo '<h3>'.$_SESSION['scoreLeft'].'</h3>';
					echo '<p><img src="characters/'.$_SESSION['characterLeft'].'.png">'.$_SESSION['playerLeft'].'</p>';
				?>
			</div>
			<div id="playerRight" class="players">
				<?php
					echo '<p>'.$_SESSION['playerRight'].'<img src="characters/'.$_SESSION['characterRight'].'.png"></p>';
					echo '<h3>'.$_SESSION['scoreRight'].'</h3>';
				?>
			</div>
		</div>
		<div id="gametype">
			<h2><?php echo $_SESSION['gametype'];?></h2>
		</div>
        
	</body>
</html>