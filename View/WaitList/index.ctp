<h2>Wait List</h2>
<table>

	<tr>
		<th>ID</th>
		<th>AYCode</th>
	</tr>
		<?php foreach ($list as $lottery): ?>
		<tr> 
			<td><?php echo $lottery['WaitList']['id']; ?></td>
			<td><?php echo $lottery['WaitList']['ay_code']; ?></td>
		</tr>
		<?php endforeach; ?>
			
	<?php unset($lottery); ?>
</table>


