<?php
/**
 * @author haochuan
 * @version 1.0
 * 
 **/
interface FlyBehavior
{
	public function fly();
}

class FlyWithWings implements FlyBehavior
{
	public function fly()
	{
		echo "Fly with Wings \n";
	}
}

class FlyWithNo implements FlyBehavior
{
	public function fly()
	{
		echo "Fly with No Wings \n";
	}
}

class Duck
{
	private $_flyBehavior;

	public function performFly()
	{
		$this->_flyBehavior->fly();
	}
	public function setFlyBehavior(FlyBehavior $behavior)
	{
		$this->_flyBehavior = $behavior;
	}
}

class RubberDuck extends Duck
{

}

$duck = new RubberDuck();

$duck->setFlyBehavior(new FlyWithWings());
$duck->performFly();

$duck->setFlyBehavior(new FlyWithNo());
$duck->performFly();
?>