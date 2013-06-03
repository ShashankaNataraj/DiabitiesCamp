<div class="unitsCodes view">
<h2><?php  echo __('Units Code'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unitsCode['UnitsCode']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Units Code'), array('action' => 'edit', $unitsCode['UnitsCode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Units Code'), array('action' => 'delete', $unitsCode['UnitsCode']['id']), null, __('Are you sure you want to delete # %s?', $unitsCode['UnitsCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Units Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Units Code'), array('action' => 'add')); ?> </li>
	</ul>
</div>
