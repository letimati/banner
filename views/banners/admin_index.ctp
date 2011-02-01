
<div id="h1">
	<h1><?php __('Banners');?></h1>
</div>

<div id="side-panel">
	<h3 class="em"><span>Actions</span></h3>
	<h4>Banners</h4>
	<ul class="menu">
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Banner', true)), array('action' => 'add')); ?></li>
	</ul>
	
			<h4>Banner Items</h4>
			<ul>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banner Items', true)), array('controller' => 'banner_items', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Banner Item', true)), array('controller' => 'banner_items', 'action' => 'add')); ?> </li>
			</ul>
</div>
<div id="main-panel">
<table id="tree">
	<?php $tableHeaders = $html->tableHeaders(array($paginator->sort('name'),$paginator->sort('alies'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

	<tbody>
	<?php foreach ($banners as $banner): ?>
		<tr id="node-<?php echo $banner['Banner']['id'] ?>">
			<td><?php echo $banner['Banner']['name']; ?>&nbsp;</td>
			<td><?php echo $banner['Banner']['alies']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Add Banner Item', true), array('controller' => 'banner_items', 'action' => 'add', $banner['Banner']['id']), array('class'=>'edit')); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $banner['Banner']['id']), array('class'=>'edit')); ?>
				<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $banner['Banner']['id']), array('class'=>'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $banner['Banner']['id'])); ?>
			</td>
		</tr>
		<?php foreach ($banner['BannerItem'] as $bannerItem): ?>
			<tr class="child-of-node-<?php echo $banner['Banner']['id'] ?>">
				<td>
					<?php
						$previewVersion = 'l';
						echo $this->Media->embed($this->Media->file("{$previewVersion}/{$bannerItem['dirname']}/{$bannerItem['basename']}"), array(
								'restrict' => array('image'),
								'alt' => $bannerItem['alternative'],
								'url' => array('controller' => 'banner_items', 'action' => 'edit', $bannerItem['id'])
						));
					?>
				</td>
				<td><?php echo $bannerItem['title'] ?><br><?php echo $bannerItem['text'] ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'banner_items', 'action' => 'edit', $bannerItem['id']), array('class'=>'edit')); ?>
					<?php echo ' | ' . $this->Html->link(__('Delete', true), array('controller' => 'banner_items', 'action' => 'delete', $bannerItem['id']), array('class'=>'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $bannerItem['id'])); ?>
				</td>
			</tr>
		<?php endforeach ?>
	<?php endforeach; ?>	
	</tbody>
</table>

<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
 |  <?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
</div>


<?php $this->Html->script(array('jquery.treeTable.js'), array('inline'=>false)); ?>

<link href="/css/jquery.treeTable.css" rel="stylesheet" type="text/css" />