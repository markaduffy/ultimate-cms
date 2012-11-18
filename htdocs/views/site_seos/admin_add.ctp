<div class="sitePagesSeos form">
<?php echo $this->Form->create('SitePagesSeo');?>
	<fieldset>
		<legend><?php __('Admin Add Site Pages Seo'); ?></legend>
	<?php
		echo $this->Form->input('site_page_id');
		echo $this->Form->input('meta_key');
		echo $this->Form->input('meta_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Site Pages Seos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Site Pages', true), array('controller' => 'site_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Page', true), array('controller' => 'site_pages', 'action' => 'add')); ?> </li>
	</ul>
</div>