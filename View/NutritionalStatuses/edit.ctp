<div class="nutritionalStatuses form">
<?php echo $this->Form->create('NutritionalStatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Nutritional Status'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('ibw');
		echo $this->Form->input('bmi');
		echo $this->Form->input('waist_girth');
		echo $this->Form->input('hip_girth');
		echo $this->Form->input('waist_hip_ratio');
		echo $this->Form->input('body_fat');
		echo $this->Form->input('hydration');
		echo $this->Form->input('visceral_fat');
		echo $this->Form->input('muscle_mass');
		echo $this->Form->input('skeletal_mass');
		echo $this->Form->input('metabolic_rate');
		echo $this->Form->input('metabolic_age');
		echo $this->Form->input('impression_advice');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NutritionalStatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NutritionalStatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nutritional Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
