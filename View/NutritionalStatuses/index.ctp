<div class="nutritionalStatuses index">
	<h2><?php echo __('Nutritional Statuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('ibw'); ?></th>
			<th><?php echo $this->Paginator->sort('bmi'); ?></th>
			<th><?php echo $this->Paginator->sort('waist_girth'); ?></th>
			<th><?php echo $this->Paginator->sort('hip_girth'); ?></th>
			<th><?php echo $this->Paginator->sort('waist_hip_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('body_fat'); ?></th>
			<th><?php echo $this->Paginator->sort('hydration'); ?></th>
			<th><?php echo $this->Paginator->sort('visceral_fat'); ?></th>
			<th><?php echo $this->Paginator->sort('muscle_mass'); ?></th>
			<th><?php echo $this->Paginator->sort('skeletal_mass'); ?></th>
			<th><?php echo $this->Paginator->sort('metabolic_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('metabolic_age'); ?></th>
			<th><?php echo $this->Paginator->sort('impression_advice'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nutritionalStatuses as $nutritionalStatus): ?>
	<tr>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nutritionalStatus['User']['name'], array('controller' => 'users', 'action' => 'view', $nutritionalStatus['User']['id'])); ?>
		</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['height']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['weight']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['ibw']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['bmi']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['waist_girth']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['hip_girth']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['waist_hip_ratio']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['body_fat']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['hydration']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['visceral_fat']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['muscle_mass']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['skeletal_mass']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['metabolic_rate']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['metabolic_age']); ?>&nbsp;</td>
		<td><?php echo h($nutritionalStatus['NutritionalStatus']['impression_advice']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nutritionalStatus['NutritionalStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nutritionalStatus['NutritionalStatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nutritionalStatus['NutritionalStatus']['id']), null, __('Are you sure you want to delete # %s?', $nutritionalStatus['NutritionalStatus']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Nutritional Status'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
