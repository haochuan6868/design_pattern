<?php
/**
 * @author haochuan
 * @version 1.0
 * 
 **/
class MyObject
{

}

class MyFactory
{
	public static function factory()
	{
		return new MyObject();
	}
}

$instance = MyFactory::factory();
?>