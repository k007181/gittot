<?php
//rename from index.php
require_once("Calculator.php")

$calculator = new Calculator();
$calculator->add(1,2);
$calculator->showResult();


