<?php

namespace CQRS;

use CQRS\VO\Product;

class BasicCommand
{
	private $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function getProductDescription()
	{
		return "Description: " . $this->product->getDescription();
	}

	public function getProductPrice()
	{
		return "Price: R$ " . $this->product->getPrice();
	}
}