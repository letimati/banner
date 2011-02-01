<?php
/* BannerItem Fixture generated on: 2011-01-31 22:04:11 : 1296511451 */
class BannerItemFixture extends CakeTestFixture {
	var $name = 'BannerItem';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'banner_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'banner_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'text' => 'Lorem ipsum dolor sit amet',
			'order' => 1,
			'created' => '2011-01-31 22:04:11',
			'modified' => '2011-01-31 22:04:11'
		),
	);
}
?>