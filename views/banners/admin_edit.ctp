<div id="h1">
	<h1><?php __('Banners');?></h1>
</div>

<div id="side-panel">
	<h3 class="em"><span>Actions</span></h3>
	<h4>Banners</h4>
		<ul>
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Banner.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Banner.id'))); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banners', true)), array('action' => 'index'));?></li>
		</ul>
		
			<h4>Banner Items</h4>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banner Items', true)), array('controller' => 'banner_items', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Banner Item', true)), array('controller' => 'banner_items', 'action' => 'add')); ?> </li>
			</ul>
	<div class="clear"></div><!-- .clear -->
</div>

<div id="main-panel">
	<h2><?php printf(__('Edit %s', true), __('Banner', true)); ?></h2>
	
	<?php echo $this->Form->create('Banner');?>
			<fieldset>
		 		<legend><?php printf(__('Banner Record', true)); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				echo $this->Form->input('alies');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
</div>