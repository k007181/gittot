<?php


class calculator{

	
	$result = 0;

	function add(a,b){
		return a + b;
	}

	function showResult(){

		echo $this->result();
	}


	function minus(a,b){

		$this->result = a-b;
	}
}