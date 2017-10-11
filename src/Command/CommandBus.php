<?php

namespace CQRS\Command;

interface CommandBus
{
	public function dispatch($command);
	public function subscribe(CommandHandler $handler);
}