<?php session_start(); include('conf/connect.php')?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/fonts.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>


	<header>
		<?php
		if(!isset($_SESSION['nickname'])){
		?>
		<form action="login.php" method="post">
			<input type="text" name="nickname" placeholder="Enter Nickname">
			<input type="submit" name="" value="Log In">
		</form>
		<?php } else { echo "<b>Nickname:  ".$_SESSION['nickname']."</b>" ?>
		<a href="exit.php">Log Out</a>
		<?php } ?>
	</header>
	<main>
		<?php
		$query = $DB -> query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,50');
		while($row=mysqli_fetch_assoc($query)){
			?>
			<div class="msg msg-left">
			<img src="img/user.png" class="userpic">
			<div class="msg-block">
				<h3>
					<?=$row['sender']?>
					<span><?=$row['dt']?></span>
				</h3>
				<?=$row['message']?>
			</div>
		</div>
			<?php
		}

		?>
		<!-- <div class="msg msg-left">
			<img src="img/user.png" class="userpic">
			<div class="msg-block">
				<h3>
					Oki doki
					<span>09.06.03 14.14.14</span>
				</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="msg msg-left">
			<img src="img/user.png" class="userpic">
			<div class="msg-block">
				<h3>
					Oki doki
					<span>09.06.03 14.14.14</span>
				</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="msg msg-right">
			<img src="img/user.png" class="userpic">
			<div class="msg-block">
		
				<h3>
					Oki doki
					<span>09.06.03 14.14.14</span>
				</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="msg msg-left">
			<img src="img/user.png" class="userpic">
			<div class="msg-block">
			
				<h3>
					Oki doki
					<span>09.06.03 14.14.14</span>
				</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div> -->

	</main>
	<footer>
		<?php if(isset($_SESSION['nickname'])){ ?>
		<textarea placeholder="Message" id="message"></textarea>
		<div id="send">SEND</div>
		<?php } else {
			echo "<b>Please log in to write message</b>";
		} ?>
	</footer>


	<script type="text/javascript" src='script/jquery.min.js'></script>
	<script type="text/javascript" src="script/script.js"></script>
</body>
</html>