<div class="unitsCodes form">
<?php echo $this->Form->create('UnitsCode'); ?>
	<fieldset>
		<legend><?php echo __('Add Units Code'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Units Codes'), array('action' => 'index')); ?></li>
	</ul>
</div>
