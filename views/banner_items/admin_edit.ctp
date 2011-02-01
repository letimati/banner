<div id="h1">
	<h1><?php __('Banner Items');?></h1>
</div>

<div id="side-panel">
	<h3 class="em"><span>Actions</span></h3>
	<h4>Banner Items</h4>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('BannerItem.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('BannerItem.id'))); ?></li>
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
	<h2><?php printf(__('Edit %s', true), __('Banner Item', true)); ?></h2>
	
	<?php echo $this->Form->create('BannerItem', array('type' => 'file'));?>
			<fieldset>
		 		<legend><?php printf(__('Banner Item Record', true)); ?></legend>
			<?php
				echo $this->Form->input('banner_id');
				echo $this->Form->input('title');
				echo $this->Form->input('text');
				$previewVersion = 'l';
				$bannerItem = $this->data;
				echo $this->Media->embed($this->Media->file("{$previewVersion}/{$bannerItem['BannerItem']['dirname']}/{$bannerItem['BannerItem']['basename']}"), array(
						'restrict' => array('image'),
						'alt' => $bannerItem['BannerItem']['alternative']
				));
				echo $this->Form->input('file', array(
					'label' => __('File', true),
					'type'  => 'file',
					'error' => array(
						'error'      => __('An error occured while transferring the file.', true),
						'resource'   => __('The file is invalid.', true),
						'access'     => __('The file cannot be processed.', true),
						'location'   => __('The file cannot be transferred from or to location.', true),
						'permission' => __('Executable files cannot be uploaded.', true),
						'size'       => __('The file is too large.', true),
						'pixels'     => __('The file is too large.', true),
						'extension'  => __('The file has the wrong extension.', true),
						'mimeType'   => __('The file has the wrong MIME type.', true),
				)));
				echo $this->Form->input('alternative');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
</div>