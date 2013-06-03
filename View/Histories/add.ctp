<div class="histories form">
<?php echo $this->Form->create('History'); ?>
	<fieldset>
		<legend><?php echo __('Add History'); ?></legend>
	<?php
		echo $this->Form->input('previous_ulcer_amputation');
		echo $this->Form->input('previous_foot_education');
		echo $this->Form->input('social_isolation');
		echo $this->Form->input('poor_access_to_healthcare');
		echo $this->Form->input('walking_barefoot');
		echo $this->Form->input('neuropathy_symptoms');
		echo $this->Form->input('claudication');
		echo $this->Form->input('rest_pain');
		echo $this->Form->input('pedal_pulses');
		echo $this->Form->input('color');
		echo $this->Form->input('temperature');
		echo $this->Form->input('Oedema');
		echo $this->Form->input('deformities_bony_prominences');
		echo $this->Form->input('assesment_inside_outside');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
