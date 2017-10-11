<?php

namespace CQRS;

use CQRS\Command\CommandHandler;

class BasicPromoCommandHandler implements CommandHandler
{
	public function handle($command)
	{
		print "You can buy it for this price:\n";
		print $command->getProductPrice() . "!\n";
	}
}