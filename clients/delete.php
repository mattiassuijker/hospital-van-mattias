<?php
	require_once "delete_logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>

	<form method="post">

		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
		</div>

		<div>
			<label for="name">name:</label>
			<span><?=$client['name']?></span>
		</div>
		
		<div>
			<label for="name">status:</label>
			<span><?=$client['status']?></span>
		</div>

		<div>
			<label for="name">species:</label>
			<span><?=$client['species']?></span>
		</div>
		
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>

	</form>	

<?php
	include "../common/footer.php";
?>