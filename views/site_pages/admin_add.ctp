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
		<legend><?php __('Admin Add Site Page'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Site Pages', true), array('action' => 'index'));?></li>
	</ul>
</div>