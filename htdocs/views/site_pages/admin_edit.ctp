<script type="text/javascript">
    tinyMCE.init({
        theme : "advanced",
        mode : "specific_textareas",
        editor_selector : "mceEditor",
        convert_urls : false,
        theme_advanced_toolbar_location : "top",
        width: "940"
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
		echo $this->Form->input('contents', array('class' => 'mceEditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('Label' => 'Save', 'class' => 'btn'));?>
</div>