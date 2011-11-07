<script type="text/javascript">

	$(document).ready(function(){
		$(".site-nav").wijmenu();
	});

</script>
<ul class="site-nav">
<li><?php echo $this->Html->link('Dashboard', array('controller' => 'pages', 'action' => 'index', 'admin' => true)) ?></li>
<li>
<?php echo $this->Html->link('Page Builder', array('controller' => 'site_pages', 'action' => 'index', 'admin' => true)) ?>
<ul>
<li><?php echo $this->Html->link('SEO Admin', array('controller' => 'site_seos', 'action' => 'index', 'admin' => true)) ?></li>
</ul>
</li>
<li><?php echo $this->Html->link('User Admin', array('controller' => 'users', 'action' => 'index', 'admin' => true)) ?></li>
<li><?php echo $this->Html->link('View Site', array('controller' => 'pages', 'action' => 'display', 'admin' => false)) ?></li>
</ul>