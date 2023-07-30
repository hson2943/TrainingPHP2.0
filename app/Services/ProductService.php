<?php
namespace App\Services;

use App\Repositories\Product\ProductRepositoryInterface;


class ProductService
{
    protected $product_repo;

    public function __construct(ProductRepositoryInterface $product_repo)
    {
        $this->product_repo = $product_repo;
    }

    public function getProduct($data_search)
    {
        return $this->product_repo->getProduct($data_search);
    }
}