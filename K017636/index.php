<?php


//rename from index.php

require_once("calculator.php")


$calculator= new calculator();

$calculator->add(1,2);

$calculator->showResult();
