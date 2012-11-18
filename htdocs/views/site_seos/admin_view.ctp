<div class="sitePagesSeos view">
<h2><?php  __('Site Pages Seo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePagesSeo['SitePagesSeo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Site Page'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sitePagesSeo['SitePage']['title'], array('controller' => 'site_pages', 'action' => 'view', $sitePagesSeo['SitePage']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePagesSeo['SitePagesSeo']['meta_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePagesSeo['SitePagesSeo']['meta_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePagesSeo['SitePagesSeo']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sitePagesSeo['SitePagesSeo']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site Pages Seo', true), array('action' => 'edit', $sitePagesSeo['SitePagesSeo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Site Pages Seo', true), array('action' => 'delete', $sitePagesSeo['SitePagesSeo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sitePagesSeo['SitePagesSeo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Pages Seos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Pages Seo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Pages', true), array('controller' => 'site_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Page', true), array('controller' => 'site_pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
