<div class="typeProducts form">
<?php echo $this->Form->create('TypeProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Type Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('size');
		echo $this->Form->input('color');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Type Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
