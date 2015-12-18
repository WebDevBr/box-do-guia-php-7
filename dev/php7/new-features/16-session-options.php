<?php

/**
 * http://php.net/manual/en/session.configuration.php
 */


session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);