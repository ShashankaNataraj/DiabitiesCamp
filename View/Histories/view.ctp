<div class="histories view">
<h2><?php  echo __('History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($history['History']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Previous Ulcer Amputation'); ?></dt>
		<dd>
			<?php echo h($history['History']['previous_ulcer_amputation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Previous Foot Education'); ?></dt>
		<dd>
			<?php echo h($history['History']['previous_foot_education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Isolation'); ?></dt>
		<dd>
			<?php echo h($history['History']['social_isolation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poor Access To Healthcare'); ?></dt>
		<dd>
			<?php echo h($history['History']['poor_access_to_healthcare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Walking Barefoot'); ?></dt>
		<dd>
			<?php echo h($history['History']['walking_barefoot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neuropathy Symptoms'); ?></dt>
		<dd>
			<?php echo h($history['History']['neuropathy_symptoms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Claudication'); ?></dt>
		<dd>
			<?php echo h($history['History']['claudication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest Pain'); ?></dt>
		<dd>
			<?php echo h($history['History']['rest_pain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pedal Pulses'); ?></dt>
		<dd>
			<?php echo h($history['History']['pedal_pulses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($history['History']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temperature'); ?></dt>
		<dd>
			<?php echo h($history['History']['temperature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oedema'); ?></dt>
		<dd>
			<?php echo h($history['History']['Oedema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deformities Bony Prominences'); ?></dt>
		<dd>
			<?php echo h($history['History']['deformities_bony_prominences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assesment Inside Outside'); ?></dt>
		<dd>
			<?php echo h($history['History']['assesment_inside_outside']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($history['User']['name'], array('controller' => 'users', 'action' => 'view', $history['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit History'), array('action' => 'edit', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete History'), array('action' => 'delete', $history['History']['id']), null, __('Are you sure you want to delete # %s?', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
