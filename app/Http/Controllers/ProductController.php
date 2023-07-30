<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{

    protected $product_service;

    public function __construct(ProductService $product_service)
    {
        $this->product_service = $product_service;
    }
    public function getProduct(Request $request)
    {
        $data_search = $request->all();
        return  $this->product_service->getProduct($data_search);
    }
}
