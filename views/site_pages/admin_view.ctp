<div class="sitePages view">
<h2><?php  __('Site Page');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePage['SitePage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePage['SitePage']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePage['SitePage']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contents'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePage['SitePage']['contents']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePage['SitePage']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePage['SitePage']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site Page', true), array('action' => 'edit', $sitePage['SitePage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Site Page', true), array('action' => 'delete', $sitePage['SitePage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sitePage['SitePage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Pages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Page', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
