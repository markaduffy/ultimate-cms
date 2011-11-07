<div class="sitePagesSeos index">
	<h2><?php __('Site Pages Seos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('site_page_id');?></th>
			<th><?php echo $this->Paginator->sort('meta_key');?></th>
			<th><?php echo $this->Paginator->sort('meta_value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sitePagesSeos as $sitePagesSeo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sitePagesSeo['SitePagesSeo']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sitePagesSeo['SitePage']['title'], array('controller' => 'site_pages', 'action' => 'view', $sitePagesSeo['SitePage']['id'])); ?>
		</td>
		<td><?php echo $sitePagesSeo['SitePagesSeo']['meta_key']; ?>&nbsp;</td>
		<td><?php echo $sitePagesSeo['SitePagesSeo']['meta_value']; ?>&nbsp;</td>
		<td><?php echo $sitePagesSeo['SitePagesSeo']['created']; ?>&nbsp;</td>
		<td><?php echo $sitePagesSeo['SitePagesSeo']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sitePagesSeo['SitePagesSeo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sitePagesSeo['SitePagesSeo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sitePagesSeo['SitePagesSeo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sitePagesSeo['SitePagesSeo']['id'])); ?>
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
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Site Pages Seo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Site Pages', true), array('controller' => 'site_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Page', true), array('controller' => 'site_pages', 'action' => 'add')); ?> </li>
	</ul>
</div>