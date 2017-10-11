<?php

namespace CQRS\VO;

class Product
{
	private $description;
	private $price;

	function __construct($description, $price)
	{
		$this->description = $description;
		$this->price = $price;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getPrice()
	{
		return $this->price;
	}
}