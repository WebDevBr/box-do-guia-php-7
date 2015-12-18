<?php

/**
 * Precisa da extensão intl ativada
 * Documentação: http://php.net/manual/en/class.intlchar.php
 */


printf('%x', IntlChar::CODEPOINT_MAX);
echo IntlChar::charName('@');
var_dump(IntlChar::ispunct('!'));