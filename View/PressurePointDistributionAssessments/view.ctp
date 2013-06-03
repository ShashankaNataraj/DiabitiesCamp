<div class="pressurePointDistributionAssessments view">
<h2><?php  echo __('Pressure Point Distribution Assessment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pressurePointDistributionAssessment['PressurePointDistributionAssessment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pressurePointDistributionAssessment['User']['name'], array('controller' => 'users', 'action' => 'view', $pressurePointDistributionAssessment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report'); ?></dt>
		<dd>
			<?php echo h($pressurePointDistributionAssessment['PressurePointDistributionAssessment']['report']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pressure Point Distribution Assessment'), array('action' => 'edit', $pressurePointDistributionAssessment['PressurePointDistributionAssessment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pressure Point Distribution Assessment'), array('action' => 'delete', $pressurePointDistributionAssessment['PressurePointDistributionAssessment']['id']), null, __('Are you sure you want to delete # %s?', $pressurePointDistributionAssessment['PressurePointDistributionAssessment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pressure Point Distribution Assessments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pressure Point Distribution Assessment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
