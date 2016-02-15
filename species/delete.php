<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete specie</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$speciess['id']?>">
		</div>
		<div>
			<label for="name">name:</label>
			<span><?=$speciess['name']?></span>
		</div>
		<div>
			<label for="name">status:</label>
			<span><?=$speciess['status']?></span>
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