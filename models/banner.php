<?php
class Banner extends BannerAppModel {
	var $name = 'Banner';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'BannerItem' => array(
			'className' => 'BannerItem',
			'foreignKey' => 'banner_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>