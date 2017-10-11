<?php

namespace CQRS;

use CQRS\Command\CommandBus;
use CQRS\Command\CommandHandler;

final class BasicCommandBus implements CommandBus
{
	private $handlers = [];
	private $commands = [];

	public function subscribe(CommandHandler $handler)
	{
		$this->handlers[] = $handler;
	}

	public function dispatch($command)
	{
		$this->commands[] = $command;

		while ($command = array_shift($this->commands)) {
			foreach ($this->handlers as $handler) {
				$handler->handle($command);
			}
		}
	}
}