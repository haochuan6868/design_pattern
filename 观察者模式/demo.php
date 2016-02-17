<?php
/**
 * @author haochuan
 * @version 1.0
 * 
 **/
class Paper
{
	private $_observers = array();

	public function register($sub)
	{
		$this->_observers[] = $sub;
	}
	public function trigger()
	{
		if(!empty($this->_observers)){
			foreach($this->_observers as $observer){
				$observer->update();
			}
		}
	}
}

interface Observerable
{
	public function update();
}

class Subscriber implements Observerable
{
	public function update(){
		echo "Callback\n";
	}
}

$paper = new Paper();
$paper->register(new Subscriber());

$paper->trigger();
?>