<div class="histories index">
	<h2><?php echo __('Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('previous_ulcer_amputation'); ?></th>
			<th><?php echo $this->Paginator->sort('previous_foot_education'); ?></th>
			<th><?php echo $this->Paginator->sort('social_isolation'); ?></th>
			<th><?php echo $this->Paginator->sort('poor_access_to_healthcare'); ?></th>
			<th><?php echo $this->Paginator->sort('walking_barefoot'); ?></th>
			<th><?php echo $this->Paginator->sort('neuropathy_symptoms'); ?></th>
			<th><?php echo $this->Paginator->sort('claudication'); ?></th>
			<th><?php echo $this->Paginator->sort('rest_pain'); ?></th>
			<th><?php echo $this->Paginator->sort('pedal_pulses'); ?></th>
			<th><?php echo $this->Paginator->sort('color'); ?></th>
			<th><?php echo $this->Paginator->sort('temperature'); ?></th>
			<th><?php echo $this->Paginator->sort('Oedema'); ?></th>
			<th><?php echo $this->Paginator->sort('deformities_bony_prominences'); ?></th>
			<th><?php echo $this->Paginator->sort('assesment_inside_outside'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($histories as $history): ?>
	<tr>
		<td><?php echo h($history['History']['id']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['previous_ulcer_amputation']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['previous_foot_education']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['social_isolation']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['poor_access_to_healthcare']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['walking_barefoot']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['neuropathy_symptoms']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['claudication']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['rest_pain']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['pedal_pulses']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['color']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['temperature']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['Oedema']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['deformities_bony_prominences']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['assesment_inside_outside']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($history['User']['name'], array('controller' => 'users', 'action' => 'view', $history['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $history['History']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $history['History']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $history['History']['id']), null, __('Are you sure you want to delete # %s?', $history['History']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
