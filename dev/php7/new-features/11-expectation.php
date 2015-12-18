<?php

/**
 * http://php.net/manual/en/function.assert.php#function.assert.expectations
 */

ini_set('assert.exception', 1);

class CustomError extends AssertionError {}

assert(false, new CustomError('Some error message'));