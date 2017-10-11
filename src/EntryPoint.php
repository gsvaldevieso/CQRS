<?php

require_once __DIR__ . '/../vendor/autoload.php';


$commandBus     = new CQRS\BasicCommandBus();
$commandHandler = new CQRS\BasicCommandHandler();
$command        = new CQRS\BasicCommand("Este é um exemplo de comando");

$commandBus->subscribe($commandHandler);
$commandBus->dispatch($command);