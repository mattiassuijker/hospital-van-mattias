<?php
	require_once "index.logic.php";
	include "../common/header.php";

?>
	<h1>Patients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>	
			<tr>
				<th>name</th>
				<th>status</th>
				<th>specie</th>
				<th>client</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['namespecies']?></td>
				<td><?=$patient['nameclient']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>