<?php
	if ($latest === null) {
		echo $this->html->link('Generating view. Please refresh page.', array());
	} else { ?>
<table class="pastes">
	<tr>
		<th>Paste</th>
		<th>Preview</th>
		<th>Author</th>
		<th>Date</th>
	</tr>
	<tbody>
	<?php foreach ($latest as $key => $row): ?>
		<tr class="<?=($key % 2) ? 'del1' : 'del2'; ?>">
			<td class="<?=$row->language; ?>" title="<?=$row->language; ?>">
				<?php echo $this->html->link(substr($row->id, 0, 12) . '...', '/view/'.$row->id); ?>
			</td>
			<td class="preview"><?=$row->preview; ?></td>
			<td><?=$row->author; ?></td>
			<td><?php echo date('Y-m-d H:i', strtotime($row->created)); ?></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
<?php } ?>