<?php

interface Logger {
    public function log(string $msg);
}

class Application {
    private $logger;

    public function getLogger(): Logger 
    {
         return $this->logger;
    }

    public function setLogger(Logger $logger) 
    {
         $this->logger = $logger;
    }
}

$anonymous_class = new class implements Logger 
{
    public function log(string $msg)
    {
        return $msg;
    }
};

$app = new Application;
$app->setLogger($anonymous_class);

var_dump($anonymous_class);

var_dump($app->getLogger()->log('Minha mensagem de log'));