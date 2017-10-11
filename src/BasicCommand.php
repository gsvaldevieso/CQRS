<?php

namespace CQRS;

class BasicCommand
{
	private $message;

	public function __construct(string $message)
	{
		$this->message = $message;
	}

	public function getMessage() : string
	{
		return get_class()." diz: ".$this->message;
	}
}