<h2>This is a test</h2>
<table>

	<tr>
		<th>Aycode</th>
		<th>Did_tour</th>
	</tr>

	<?php foreach ($aycodes as $lottery): ?>
	<tr>
		<td><?php echo $lottery['ay_code']; ?></td>
		<td><?php echo $lottery['did_tour']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($lottery); ?>
</table>


