<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($user['User']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Register Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['register_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nutritional Statuses'), array('controller' => 'nutritional_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nutritional Status'), array('controller' => 'nutritional_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pressure Point Distribution Assessments'), array('controller' => 'pressure_point_distribution_assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pressure Point Distribution Assessment'), array('controller' => 'pressure_point_distribution_assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Histories'); ?></h3>
	<?php if (!empty($user['History'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Previous Ulcer Amputation'); ?></th>
		<th><?php echo __('Previous Foot Education'); ?></th>
		<th><?php echo __('Social Isolation'); ?></th>
		<th><?php echo __('Poor Access To Healthcare'); ?></th>
		<th><?php echo __('Walking Barefoot'); ?></th>
		<th><?php echo __('Neuropathy Symptoms'); ?></th>
		<th><?php echo __('Claudication'); ?></th>
		<th><?php echo __('Rest Pain'); ?></th>
		<th><?php echo __('Pedal Pulses'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Temperature'); ?></th>
		<th><?php echo __('Oedema'); ?></th>
		<th><?php echo __('Deformities Bony Prominences'); ?></th>
		<th><?php echo __('Assesment Inside Outside'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['History'] as $history): ?>
		<tr>
			<td><?php echo $history['id']; ?></td>
			<td><?php echo $history['previous_ulcer_amputation']; ?></td>
			<td><?php echo $history['previous_foot_education']; ?></td>
			<td><?php echo $history['social_isolation']; ?></td>
			<td><?php echo $history['poor_access_to_healthcare']; ?></td>
			<td><?php echo $history['walking_barefoot']; ?></td>
			<td><?php echo $history['neuropathy_symptoms']; ?></td>
			<td><?php echo $history['claudication']; ?></td>
			<td><?php echo $history['rest_pain']; ?></td>
			<td><?php echo $history['pedal_pulses']; ?></td>
			<td><?php echo $history['color']; ?></td>
			<td><?php echo $history['temperature']; ?></td>
			<td><?php echo $history['Oedema']; ?></td>
			<td><?php echo $history['deformities_bony_prominences']; ?></td>
			<td><?php echo $history['assesment_inside_outside']; ?></td>
			<td><?php echo $history['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'histories', 'action' => 'view', $history['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'histories', 'action' => 'edit', $history['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'histories', 'action' => 'delete', $history['id']), null, __('Are you sure you want to delete # %s?', $history['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Nutritional Statuses'); ?></h3>
	<?php if (!empty($user['NutritionalStatus'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Ibw'); ?></th>
		<th><?php echo __('Bmi'); ?></th>
		<th><?php echo __('Waist Girth'); ?></th>
		<th><?php echo __('Hip Girth'); ?></th>
		<th><?php echo __('Waist Hip Ratio'); ?></th>
		<th><?php echo __('Body Fat'); ?></th>
		<th><?php echo __('Hydration'); ?></th>
		<th><?php echo __('Visceral Fat'); ?></th>
		<th><?php echo __('Muscle Mass'); ?></th>
		<th><?php echo __('Skeletal Mass'); ?></th>
		<th><?php echo __('Metabolic Rate'); ?></th>
		<th><?php echo __('Metabolic Age'); ?></th>
		<th><?php echo __('Impression Advice'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['NutritionalStatus'] as $nutritionalStatus): ?>
		<tr>
			<td><?php echo $nutritionalStatus['id']; ?></td>
			<td><?php echo $nutritionalStatus['user_id']; ?></td>
			<td><?php echo $nutritionalStatus['height']; ?></td>
			<td><?php echo $nutritionalStatus['weight']; ?></td>
			<td><?php echo $nutritionalStatus['ibw']; ?></td>
			<td><?php echo $nutritionalStatus['bmi']; ?></td>
			<td><?php echo $nutritionalStatus['waist_girth']; ?></td>
			<td><?php echo $nutritionalStatus['hip_girth']; ?></td>
			<td><?php echo $nutritionalStatus['waist_hip_ratio']; ?></td>
			<td><?php echo $nutritionalStatus['body_fat']; ?></td>
			<td><?php echo $nutritionalStatus['hydration']; ?></td>
			<td><?php echo $nutritionalStatus['visceral_fat']; ?></td>
			<td><?php echo $nutritionalStatus['muscle_mass']; ?></td>
			<td><?php echo $nutritionalStatus['skeletal_mass']; ?></td>
			<td><?php echo $nutritionalStatus['metabolic_rate']; ?></td>
			<td><?php echo $nutritionalStatus['metabolic_age']; ?></td>
			<td><?php echo $nutritionalStatus['impression_advice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nutritional_statuses', 'action' => 'view', $nutritionalStatus['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nutritional_statuses', 'action' => 'edit', $nutritionalStatus['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nutritional_statuses', 'action' => 'delete', $nutritionalStatus['id']), null, __('Are you sure you want to delete # %s?', $nutritionalStatus['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nutritional Status'), array('controller' => 'nutritional_statuses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pressure Point Distribution Assessments'); ?></h3>
	<?php if (!empty($user['PressurePointDistributionAssessment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Report'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['PressurePointDistributionAssessment'] as $pressurePointDistributionAssessment): ?>
		<tr>
			<td><?php echo $pressurePointDistributionAssessment['id']; ?></td>
			<td><?php echo $pressurePointDistributionAssessment['user_id']; ?></td>
			<td><?php echo $pressurePointDistributionAssessment['report']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pressure_point_distribution_assessments', 'action' => 'view', $pressurePointDistributionAssessment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pressure_point_distribution_assessments', 'action' => 'edit', $pressurePointDistributionAssessment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pressure_point_distribution_assessments', 'action' => 'delete', $pressurePointDistributionAssessment['id']), null, __('Are you sure you want to delete # %s?', $pressurePointDistributionAssessment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pressure Point Distribution Assessment'), array('controller' => 'pressure_point_distribution_assessments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
