<?php
class Color
{
	const CST1 = 77777;
	public static $nbrInstance = 0;
	public $red = 44;
	public $green = 55;
	public $blue = 22;
	private $_purple = 88;
	private $_att = 0;
//	public function getATT() {return $this->_purple; }
//	public function setATT($v) { $this->_purple =$v; return; }
	
	function __construct() 
	{
		self::$nbrInstance++;
		print ('constructor called'. PHP_EOL);
		print ('$instance-> _purple : '. $this->_purple . PHP_EOL);
				print ('$color[\'red\']) :'."\n" . $this->red );
				print ('$color[\'green\']) :'."\n" . $this->green );
				print ('$color[\'blue\']) :'."\n" . $this->blue );

		 	return;
	}
	function __toString() 
	{
		return 'exemple($_purple)'. $this->green.')';
	}
	function __destruct() 
	{
		self::$nbrInstance--;
		print ('destuctor called'. PHP_EOL);
		 print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
		return;
	}
	static function  doc() 
	{
		return '"cest le debut de ma super doc". PHP_EOL';
	}

	function dd() 
	{
		print ($this->red. PHP_EOL);
		return;
	}
	private function _ss() 
	{
		print ('d'. PHP_EOL);
		return;
	}
	public function getATT() {return $this->_att; }
	public function __clone() {print ('ccclllonne]) :');return;  }
//	public function setATT($v) { $this->_purple =$v; return; }

}
$tab = array(); 
print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
$instance = new Color(array (rbg[0] => red, rbg[1] => green, rbg[2] => blue));
print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
print("\n".$instance->blue.PHP_EOL);
print ($instance.PHP_EOL);
print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
//$instance2 = clone $instance;
print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
//$instance2-> getATT(33);
print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
$instance3 = new Color(array (arg => Color::CST1));
print ("DOCUMENTATION 2.0: ".Color::doc());
print ( "\n".'nbre instances '. Color::$nbrInstance."\n");
?>
