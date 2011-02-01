
<div id="h1">
	<h1><?php __('Banner Items');?></h1>
</div>

<div id="side-panel">
	<h3 class="em"><span>Actions</span></h3>
	<h4>Banner Items</h4>
	<ul class="menu">
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Banner Item', true)), array('action' => 'add')); ?></li>
	</ul>
	
			<h4>Banners</h4>
			<ul>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banners', true)), array('controller' => 'banners', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Banner', true)), array('controller' => 'banners', 'action' => 'add')); ?> </li>
			</ul>
</div>
<div id="main-panel">
<table>
	<?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('banner_id'),$paginator->sort('title'),$paginator->sort('text'),$paginator->sort('order'),$paginator->sort('created'),$paginator->sort('modified'),$paginator->sort('dirname'),$paginator->sort('basename'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

	<tbody>
		<?php
		$i = 0;
		foreach ($bannerItems as $bannerItem):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="odd"';
			}
		?>
	<tr<?php echo $class;?>>
		<td><?php echo $bannerItem['BannerItem']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bannerItem['Banner']['name'], array('controller' => 'banners', 'action' => 'view', $bannerItem['Banner']['id'])); ?>
		</td>
		<td><?php echo $bannerItem['BannerItem']['title']; ?>&nbsp;</td>
		<td><?php echo $bannerItem['BannerItem']['text']; ?>&nbsp;</td>
		<td><?php echo $bannerItem['BannerItem']['order']; ?>&nbsp;</td>
		<td><?php echo $bannerItem['BannerItem']['created']; ?>&nbsp;</td>
		<td><?php echo $bannerItem['BannerItem']['modified']; ?>&nbsp;</td>
		<td><?php echo $bannerItem['BannerItem']['dirname']; ?>&nbsp;</td>
		<td><?php echo $bannerItem['BannerItem']['basename']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bannerItem['BannerItem']['id']), array('class'=>'edit')); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $bannerItem['BannerItem']['id']), array('class'=>'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $bannerItem['BannerItem']['id'])); ?>
		</td>
	</tr>
	
	<?php endforeach; ?>	</tbody>
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
 |
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
</div>