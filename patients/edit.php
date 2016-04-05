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
		<div>
			<label for="status">Status:</label>
			<input type="text" id="status" name="status" value="<?=$patient['status']?>">
		</div>
		<div>
			<label for="species">Species:</label>
			<select name="species" id="species">
				<?php foreach ($species as $specie) { 
				if ($patient['speciesid'] == $specie['id']) {?>
				<option selected value=<?php echo $specie['id'];?>><?php echo $specie['name'];?></option>
					<?php }	
				else {?>
				<option value=<?php echo $specie['id'];?>><?php echo $specie['name'];?></option>
				<?php }} ?>
			</select>
		</div>
		<div>
			<label for="client">Client:</label>
			<select name="client" id="client">
				<?php foreach ($clients as $client) {
				if ($patient['clientid'] == $client['id']) {?>
				<option selected value=<?php echo $client['id'];?>><?php echo $client['name'];?></option>
				<?php }
				else {?>
				<option value=<?php echo $client['id'];?>><?php echo $client['name'];?></option>
				<?php }}?>
			</select>

		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>