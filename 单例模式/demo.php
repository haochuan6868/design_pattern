<?php
/**
 *
 *
 *
 **/
class demo
{
	private static $_instance;

	private function __construct()
	{

	}

	private static function get_instance()
	{
		if(!isset(self::$_instance)){
			self::$_instance = new self();
		}else{
			return self::$_instance;
		}
	}

	//阻止clone
	private function __clone()
	{
		trigger_error('Clone is not allow', E_USER_ERROR);
	}

	function test()
	{
		echo "test";
	}
}

$test = man::get_instance();
$test->test();
?>