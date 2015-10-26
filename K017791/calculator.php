<?

class calculator
{
	$result=0;

	function add(a,b)
	{
	$this->result = a + b;
	}
	
	function showResult(){
	echo $this->result;
	}
}