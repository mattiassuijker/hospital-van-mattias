<?php
	require_once "edit_logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" value="<?=$patient['species']?>">
		</div>
		<div>
			<label for="name">status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>