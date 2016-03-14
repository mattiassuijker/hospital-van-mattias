<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<select name="client">
			<?foreach ($rows as $row) {
				echo "<option value=$row[id]>$row[name]</option>"
			?>
  			
  			
		</select>
Try it Yourself »

		<div>
			<label for="name">Client:</label>
			<input type="text" id="client" name="client" value="<?=$patient['nameclient']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" value="<?=$patient['namespecies']?>">
		</div>
		<div>
			<label for="name">Status:</label>
			<input type="text" id="status" name="status" value="<?=$patient['status']?>">
		</div>
		</div>

		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>