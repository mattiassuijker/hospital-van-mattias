<?php
	require_once "edit_logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>">
		</div>
		<div>
			<label for="name">species:</label>
			<input type="text" id="species" name="species" value="<?=$client['species']?>">
		</div>
		<div>
			<label for="name">status:</label>
			<textarea type="text" id="status" name="status" value="<?=$client['status']?>"><?php echo $client['status'];?></textarea>
		</div>
		
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>