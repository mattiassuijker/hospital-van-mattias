<?php
	require_once "index_logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>	
			<tr>
				<th>id</th>
				<th>name</th>
				<th>species</th>
				<th>product</th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['id']?></td>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
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