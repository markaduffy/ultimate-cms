<script type="text/javascript">
    tinyMCE.init({
        theme : "advanced",
        mode : "textareas",
        convert_urls : false,
        theme_advanced_toolbar_location : "top"
    });
</script> 
<div class="sitePages form">
<?php echo $this->Form->create('SitePage');?>
	<fieldset>
		<legend><?php __('Admin Edit Site Page'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('contents');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SitePage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SitePage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Site Pages', true), array('action' => 'index'));?></li>
	</ul>
</div>