<div id="h1">
	<h1><?php __('Banner Items');?></h1>
</div>

<div id="side-panel">
	<h3 class="em"><span>Actions</span></h3>
	<h4>Banner Items</h4>
		<ul>
					<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banner Items', true)), array('action' => 'index'));?></li>
		</ul>
		
			<h4>Banners</h4>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banners', true)), array('controller' => 'banners', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Banner', true)), array('controller' => 'banners', 'action' => 'add')); ?> </li>
			</ul>
	<div class="clear"></div><!-- .clear -->
</div>

<div id="main-panel">
	<h2><?php printf(__('Add %s', true), __('Banner Item', true)); ?></h2>
	
	<?php echo $this->Form->create('BannerItem', array('type' => 'file'));?>
			<fieldset>
		 		<legend><?php printf(__('Banner Item Record', true)); ?></legend>
			<?php
				echo $this->Form->input('banner_id');
				echo $this->Form->input('title');
				echo $this->Form->input('text');
				echo $this->Form->input('file', array('type' => 'file'));
				echo $this->Form->input('alternative');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
</div>