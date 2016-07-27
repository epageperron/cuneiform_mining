<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php echo $this->Html->charset('utf-8'); ?>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
echo $scripts_for_layout;
echo $this->Html->css('menu');
echo $this->Html->css('styles');
echo $this->Html->script('prototype');
echo $this->Html->script('scriptaculous.js?load=effects,controls');
echo $this->Html->script('jquery-1.4.2.min');?>
</head>
<body>
<div id="header">
<div class="search_item"><?php echo $this->Form->create("Tablet",array('action' => 'search'));?> <?php echo $this->Form->input("q", array('label' => ''));?> </div><div class="search_item top_margin1 submit"><?php echo $this->Form->end("Search");?> </div>
<div class="clr"></div>
</div>

<div class="menu">
	<ul>
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home'));?></li>
		<li><a href="#" id="current">Tablets</a>
			<ul>
				<li><?php echo $this->Html->link('Add',array('controller' => 'tablets', 'action' => 'add'))?></li>
				<li><?php echo $this->Html->link('List',array('controller' => 'tablets', 'action' => 'index'))?></li>
				<li><?php echo $this->Html->link('Typology list',array('controller' => 'tablets', 'action' => 'typo'))?></li>
		   </ul>
		   <li><a href="#" id="current">Dictionary</a>
			<ul>
				<li><?php echo $this->Html->link('Add Word',array('controller' => 'words', 'action' => 'add'))?></li>
				<li><?php echo $this->Html->link('Add Sign',array('controller' => 'signs', 'action' => 'add'))?></li>
				<li><?php echo $this->Html->link('List Words',array('controller' => 'words', 'action' => 'index'))?></li>
				<li><?php echo $this->Html->link('List Word Types',array('controller' => 'word_types', 'action' => 'index'))?></li>
				<li><?php echo $this->Html->link('List Signs',array('controller' => 'signs', 'action' => 'index'))?></li>
				<li><?php echo $this->Html->link('List Terms',array('controller' => 'terms', 'action' => 'index'))?></li>
								<li><?php echo $this->Html->link('Terms Inline Edit',array('controller' => 'terms', 'action' => 'inline_edit'))?></li>
				<li><?php echo $this->Html->link('List Readings',array('controller' => 'readings', 'action' => 'index'))?></li>
				<!-- <li><?php //echo $this->Html->link('Inline Edit',array('controller' => 'terms', 'action' => 'inline_edit'))?></li> -->
		   </ul>
		<li><?php echo $this->Html->link('Options', array('controller' => 'pages', 'action' => 'display', 'options'));?>
<ul>	<li><?php echo $this->Html->link('List Tags',array('controller' => 'tags', 'action' => 'index'))?></li></ul>
	</ul>
</div>
<div id="content">
<?php echo $content_for_layout ?>
</div>
 <div id="footer">
     <?php echo $this->element('sql_dump'); ?>
 </div>
</body>
</html>
