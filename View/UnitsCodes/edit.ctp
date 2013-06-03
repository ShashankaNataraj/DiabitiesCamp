<div class="unitsCodes form">
<?php echo $this->Form->create('UnitsCode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Units Code'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UnitsCode.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UnitsCode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Units Codes'), array('action' => 'index')); ?></li>
	</ul>
</div>
