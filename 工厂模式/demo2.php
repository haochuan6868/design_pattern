<?php
/**
 * @author haochuan
 * @version 1.0
 * 
 **/
interface IImage
{
	function getHeight();
	function getWidth();
	function getData();
}

class Image_PNG implements IImage
{
	private $_width,$_height,$_data;

	private function __construct($file)
	{
		$this->_file = $file;
		$this->_parse();
	}
	private function _parse()
	{
		//TODO 完成PNG格式的解析工作
		//并填充$_width,$hegiht,$_data
	}
	public function getWidth()
	{
		return $this->_width;
	}
	public function getHeight()
	{
		return $this->_height;
	}
	public function getData()
	{
		return $this->_data;
	}
}

class Image_JPEG implements IImage
{
	private $_width,$_height,$_data;

	private function __construct($file)
	{
		$this->_file = $file;
		$this->_parse();
	}
	private function _parse()
	{
		//TODO 完成JPEG格式的解析工作
		//并填充$_width,$hegiht,$_data
	}
	public function getWidth()
	{
		return $this->_width;
	}
	public function getHeight()
	{
		return $this->_height;
	}
	public function getData()
	{
		return $this->_data;
	}
}

class ImageFactory()
{
	public static function factory($file)
	{
		$pathParts = pathinfo($file);
		switch (strtolower($pathParts['extension'])) 
		{
			case 'jpg':
				$ret = new Image_JPEG($file);
				break;
			case 'png':
				$ret = new Image_PNG($file);
				break;
			default:
				//ERROR
				break;
		}
		if($ret instanceof IImage){
			return $ret;
		} else {
			//ERROR
		}
	}
}

$img = ImageFactory::factory('/path/1.jpg');
echo $img->getHeight();
?>