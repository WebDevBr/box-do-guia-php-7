<?php

class A {
	private $x = 1;
}

// Pre PHP 7 code
$getXCB = function() {
	return $this->x;
};

$getX = $getXCB->bindTo(new A, 'A'); // intermediate closure

var_dump($getX());

// PHP 7+ code
$getX = function() {
	return $this->x;
};

var_dump($getX->call(new A));