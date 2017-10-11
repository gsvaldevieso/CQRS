<?php

namespace CQRS;

use CQRS\Command\CommandHandler;

class BasicCommandHandler implements CommandHandler
{
	public function handle($command)
	{
		echo "Hello, we've an amazing product for you:\n";
		echo $command->getProductDescription() . "!\n";
	}
}