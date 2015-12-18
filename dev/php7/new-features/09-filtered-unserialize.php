<?php

class My {
	private $x = 1;
	public function getX() {
		return $this->x;
	}
}

$foo = serialize([
	null,
	'Erik',
	30,
	new My
]);

var_dump($foo);

// converts all objects into __PHP_Incomplete_Class object
$data = unserialize($foo);
var_dump($data[3]->getX());

// converts all objects into __PHP_Incomplete_Class object
var_dump(unserialize($foo, ["allowed_classes" => false]));

// converts all objects into __PHP_Incomplete_Class object except those of MyClass and MyClass2
var_dump(unserialize($foo, ["allowed_classes" => ["My", "MyClass2"]]));

// default behaviour (same as omitting the second argument) that accepts all classes
var_dump(unserialize($foo, ["allowed_classes" => true]));
