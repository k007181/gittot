<?php 
/**
* 
*/
class Calculator
{
	$result = 0;

	function add($a=0, $b=0 )
	{
		$this->result = $a + $b;
	}

	function showResult(){
		echo $this->result;
	}
	
	function minus($a, $b)
	{
		$this->result = $a - $b;
	}
}
 ?>