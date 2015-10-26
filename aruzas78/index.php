<?php
//rename from index.php
require_once("calculator.php")

$calculator = new Calculator();
$calculator->add(1,2);
$calculator->showResult();