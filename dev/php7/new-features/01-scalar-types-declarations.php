<?php

/**
 * Valores disponíveis:
 * - string
 * - float
 * - bool
 *
 * E anteriormente introduzido no PHP 5
 * - Nomes de Classes
 * - Nomes de Interfaces
 * - array
 * - callable
 */

function sumOfInts(float ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));