<div class="drugs view">
<h2><?php  echo __('Drug'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Drug'), array('action' => 'edit', $drug['Drug']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Drug'), array('action' => 'delete', $drug['Drug']['id']), null, __('Are you sure you want to delete # %s?', $drug['Drug']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drugs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drug'), array('action' => 'add')); ?> </li>
	</ul>
</div>
