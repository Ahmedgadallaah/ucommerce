<?php

namespace App\Http\Eloquent;

use App\Http\Interfaces\ProductsRepositoryInterface;
use App\Product;
class ProductRepository implements ProductsRepositoryInterface
{
	public function GetAllProductWithPrice()
	{
		return Product::all();
	}
}