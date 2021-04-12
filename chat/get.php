<?php
include('conf/connect.php');
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