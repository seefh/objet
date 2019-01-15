<?php
class Color
{
	public $red ;
	public $green;
	public $blue;
	private $_purple = 88;
	public function getATT() {return $this->_purple; }
	public function setATT($v) { $this->_purple =$v; return; }
	
	function __construct() 
	{
		print ('constructor called'. PHP_EOL);
		//print ('$instance-> $red : '. $this->red . PHP_EOL);
		//$this->red = 21;
		//print ('$instance-> $red : '. $this->red . PHP_EOL);
		print ('$instance-> _purple : '. $this->_purple . PHP_EOL);
    /* if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
              //  $this->red = intval($color['red']);
				print ('intval($color[\'red\']) : '. $this->red );

                //$this->green = intval($color['green']);
               // $this->blue = intval($color['blue']);
            } else if (isset($color['rgb'])) {
                $rgb = intval($color["rgb"]);
                $this->red = $rgb / 65281 % 256;
				print ('intval($color[\'red\']) : '. $this->red );
                $this->green = $rgb / 256 % 256;
                $this->blue = $rgb % 256;
            }*/
/////	if (array_key_exists('rgb', $kwargs))
		$this->red = intval($color['red']);
		$this->green = intval($color['green']);
		$this->blue = intval($color['blue']);
				print ('$color[\'red\']) :'."\n" . $this->red );
				print ('$color[\'green\']) :'."\n" . $this->green );
				print ('$color[\'blue\']) :'."\n" . $this->blue );

		 	return;
	}
	function __toString() 
	{
		return 'exemple($_purple)'. $this->getATT().')';
	}
	function __destruct() 
	{
		print ('destuctor called'. PHP_EOL);
		return;
	}

	function ss() 
	{
		print ('d'. PHP_EOL);
		return;
	}

}
$tab = array(); 
$instance = new Color(array (rbg[0] => red, rbg[1] => green, rbg[2] => blue));
//$instance-> ss();
//print ('$instance-> $red : '. $instance->red . PHP_EOL);
//$instance->red = 42;
//print ('$instance-> $red : '. $instance->red . PHP_EOL);
//$instance = new Color(array (rbg[0] => red));
print($instance. PHP_EOL);
?>
