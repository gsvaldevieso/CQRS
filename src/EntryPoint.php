<?php

require_once __DIR__ . '/../vendor/autoload.php';


$commandBus          = new CQRS\BasicCommandBus();
$commandHandler      = new CQRS\BasicCommandHandler();
$promoCommandHandler = new CQRS\BasicPromoCommandHandler();
$command             = new CQRS\BasicCommand(new CQRS\VO\Product("T-Shirt", 49.9));
$commandShoes        = new CQRS\BasicCommand(new CQRS\VO\Product("Shoes", 19.9));

$commandBus->subscribe($commandHandler);
$commandBus->subscribe($promoCommandHandler);

$commandBus->dispatch($command);
$commandBus->dispatch($commandShoes);