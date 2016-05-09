<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>

	<h1>New patient</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="status">Status:</label>
			<input type="text" id="status" name="status">
		</div>
		<div>
			<label for="name">gender:</label><br>
			<label for="name">male</label>
			<input type="radio" name="gender" value="male"><br>
			<label for="name">Female</label>
  			<input type="radio" name="gender" value="female"><br>
  		</div>
		<div>
			<label for="species">Species:</label>
			<select name="species" id="species">
				<?php foreach ($species as $specie) { ?>
				<option value=<?php echo $specie['id'];?>><?php echo $specie['name'];?></option>
				<?php } ?>
			</select>
			
		</div>
		<div>
			<label for="client">Client:</label>
			<select name="client" id="client">
				<?php foreach ($clients as $client) {?>
				<option value=<?php echo $client['id'];?>><?php echo $client['name'];?></option>
				<?php }?>
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