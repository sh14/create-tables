<?php
namespace myspace;

require 'create-tables.php';

function get_version() {
	return '1.0.0';
}

function get_default_columns() {
	$prefix = '';
	$data   = array(
				$prefix . 'test'          => array(
					'balance' => array(
						'type'    => 'int',
						'length'  => 22,
						'default' => '',
						'null'    => 0,
						'ai'      => 1, // 1 - set auto increment for that column
					),
				),	
	);

	return $data;
}

add_filter( __NAMESPACE__ . '\create_tables', __NAMESPACE__ . '\get_default_columns', 10, 1 );

register_activation_hook( __FILE__, __NAMESPACE__ . '\create_tables' );
