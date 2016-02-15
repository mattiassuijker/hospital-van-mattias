<?php
	require_once "index_logic.php";
	include "../common/header.php";
?>
	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>	
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>species</th>
				<th>status</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
	</tbody>
<?php 

	foreach($clients as $client):
 ?>
			<tr>
				<td><?=$client['id'] ?></td>
				<td><?=$client['name'] ?></td>
				<td><?=$client['species'] ?></td>
				<td><?=$client['status'] ?></td>
				<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
			</tr>
<?php 
endforeach;
 ?>
 		</tbody>
 	</table>

<?php
	include "../common/footer.php";
?>