<?php
	require_once "index.logic.php";
	include "../common/header.php";

?>
	<h1>Patients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>	
			<tr>
				<th><a href="index.php?column=name&sort=<?= $displaysort; ?>">name</a></th>
				<th><a href="index.php?column=status&sort=<?= $displaysort; ?>">status</th>
				<th><a href="index.php?column=species&sort=<?= $displaysort; ?>">species</a></th>
				<th><a href="index.php?column=client&sort=<?= $displaysort; ?>">client</a></th>
				<th><a href="index.php?column=gender&sort=<?= $displaysort; ?>">gender</th>
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
				<td><?=$patient['species']?></td>
				<td><?=$patient['client']?></td>
				<td><?=$patient['gender']?></td>
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