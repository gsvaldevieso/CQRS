<?php

namespace CQRS;

use CQRS\Command\CommandHandler;

class BasicCommandHandler implements CommandHandler
{
	public function handle($command)
	{
		echo $command->getMessage();
	}
}