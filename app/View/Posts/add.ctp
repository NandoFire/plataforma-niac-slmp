<!-- File: /app/View/Posts/add.ctp -->

<?php

echo $this->extend('/Common/view');
?>

<?php $this->start('sidebarcase'); ?>

<div class="sidebarcase1">
Em Andamento<br>
<?php 
	// Em andamento, quando for possível dividir a janela.
	/**echo $this->Html->link(
	'Anotações',
	array('controller' => 'posts', 'action' => 'add2'));**/
 ?>
</div>
<?php $this->end(); ?>

<h1>Adicionar Caso</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('Nome');
echo $this->Form->input('Anotacoes', array('rows' => '3', 'length' => '600 px'));
echo $this->Form->end('Save Post');
?>



