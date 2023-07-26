<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    protected $product_model;

    public function __construct(Product $product_model)
    {
        $this->product_model = $product_model;
    }
    public function get()
    {
        $users = DB::table('products')->get();
        return $users;
    }
}
