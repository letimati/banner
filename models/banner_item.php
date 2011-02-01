<?php
class BannerItem extends BannerAppModel {
	var $name = 'BannerItem';
	var $actsAs = array('Media.Transfer', 'Media.Generator', 'Media.Coupler');
	
	var $virtualFields = array(
	    'path' => "CONCAT_WS('/', dirname, basename)"
	);
	
	/*
	var $validate = array(
		'file' => array(
			'size'       => array('rule' => array('checkSize', '5M')),
			'pixels'     => array('rule' => array('checkPixels', '1600x1600')),
			'extension'  => array('rule' => array('checkExtension', false, array(
				'jpg', 'jpeg', 'png'
			))),
			'mimeType'   => array('rule' => array('checkMimeType', false, array(
				'image/jpeg', 'image/png'
	)))));
	*/

	var $belongsTo = array(
		'Banner' => array(
			'className' => 'Banner',
			'foreignKey' => 'banner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>