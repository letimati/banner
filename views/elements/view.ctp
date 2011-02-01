<?php $banner = $this->requestAction('/banner/banners/view/'.$alias, array('cache' => '1 Day')); ?><?php  ?>

<div id="banner">
	<div id="paginate-slider2" class="pagination">
	<?php foreach ($banner['BannerItem'] as $banner_item): ?>
        <a href="#" class="toc">
            <span class="bold"><?php echo $banner_item['title']?></span><br />
            <?php echo $banner_item['text']?> 
        </a>		
	<?php endforeach ?>
	</div>
    <div id="slider2" class="sliderwrapper">
	<?php foreach ($banner['BannerItem'] as $banner_item): ?>
        <div class="contentdiv">
        	<a href="#">
				<?php
					$previewVersion = 'b';
					echo $this->Media->embed($this->Media->file("{$previewVersion}/{$banner_item['dirname']}/{$banner_item['basename']}"), array(
							'restrict' => array('image'),
							'alt' => $banner_item['alternative'],
							'url' => array('controller' => 'banner_items', 'action' => 'edit', $banner_item['id'])
					));
				?>
			</a>
        </div>
	<?php endforeach ?>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="/css/contentslider.css" />
<?php $this->Html->script(array('banner'), array('inline'=>false)); ?>
