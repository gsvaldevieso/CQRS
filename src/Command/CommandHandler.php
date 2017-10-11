<?php

namespace CQRS\Command;

interface CommandHandler
{
	public function handle($command);
}