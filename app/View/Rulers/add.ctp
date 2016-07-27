<?php 
//debug($this, $showHTML = false, $showFrom = true)
//print_r($this);
 ?>
<h1>Add a ruler</h1>
<?php
echo $this->Form->create('Ruler');
echo $this->Form->input('Ruler', array('type' => 'text'));
echo $this->Form->end('Save Entry');
?>

