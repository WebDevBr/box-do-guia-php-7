<?php
// Integers
echo 1 <=> 1;
echo PHP_EOL; // 0

echo 1 <=> 2;
echo PHP_EOL; // -1

echo 2 <=> 1;
echo PHP_EOL; // 1


echo PHP_EOL;

// Floats
echo 1.5 <=> 1.5;
echo PHP_EOL; // 0

echo 1.5 <=> 2.5;
echo PHP_EOL; // -1

echo 2.5 <=> 1.5;
echo PHP_EOL; // 1


echo PHP_EOL;
// Strings
echo "a" <=> "a";
echo PHP_EOL; // 0

echo "a" <=> "b";
echo PHP_EOL; // -1

echo "b" <=> "a";
echo PHP_EOL; // 1

if (("z" <=> "a") == 1) {
	echo 'é óbvio que b é maior que a';
	echo PHP_EOL;
}