<div class="sitePages index">
	<h2><?php __('Site Pages');?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sitePages as $sitePage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($sitePage['SitePage']['title'], array('action' => 'view', $sitePage['SitePage']['id'])); ?>&nbsp;</td>
		<td><?php echo $sitePage['SitePage']['description']; ?>&nbsp;</td>
		<td><?php echo $sitePage['SitePage']['created']; ?>&nbsp;</td>
		<td><?php echo $sitePage['SitePage']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->element('actions_cell', array('id' => $sitePage['SitePage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>