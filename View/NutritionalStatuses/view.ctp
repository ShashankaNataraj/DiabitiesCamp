<div class="nutritionalStatuses view">
<h2><?php  echo __('Nutritional Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nutritionalStatus['User']['name'], array('controller' => 'users', 'action' => 'view', $nutritionalStatus['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ibw'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['ibw']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bmi'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['bmi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Waist Girth'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['waist_girth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hip Girth'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['hip_girth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Waist Hip Ratio'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['waist_hip_ratio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body Fat'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['body_fat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hydration'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['hydration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visceral Fat'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['visceral_fat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Muscle Mass'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['muscle_mass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skeletal Mass'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['skeletal_mass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metabolic Rate'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['metabolic_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metabolic Age'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['metabolic_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Impression Advice'); ?></dt>
		<dd>
			<?php echo h($nutritionalStatus['NutritionalStatus']['impression_advice']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nutritional Status'), array('action' => 'edit', $nutritionalStatus['NutritionalStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nutritional Status'), array('action' => 'delete', $nutritionalStatus['NutritionalStatus']['id']), null, __('Are you sure you want to delete # %s?', $nutritionalStatus['NutritionalStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nutritional Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nutritional Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
