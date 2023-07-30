<?php
namespace App\Repositories\Product;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    //FIX : whereBrandId, other, datasearch
    protected $product_model;
    protected $limit;
    protected $limit_relative;

    public function __construct(Product $product_model)
    {
        $this->product_model = $product_model;
    }


    public function getProduct($data_search)
    {
        $brand_id = isset($data_search['brand_id']) ? $data_search['brand_id'] : null;
        $category_id = isset($data_search['category_id']) ? $data_search['category_id'] : null;
        $key = isset($data_search['key']) ? $data_search['key'] : null;
        $limit = $this->limit;
        $query = Product::query()
            ->select('id', 'name', 'prices', 'thumbnail' ,'category_id');

        // //filter product with brand_id
        if ($brand_id) {
            $query->whereBrandId($brand_id);
        }

        //filter product with category_id
        if ($category_id) {
            $query->whereCategoryId($category_id);
        }

        //filter product with search key
        if ($key) {
            $query->where(function ($query) use ($key) {
                $query->where('name', 'like', '%' . $key . '%')
                    ->orWhere('id', "abc");
            });
        }
        $product_list = $query->orderBy('id', 'desc')->paginate(5);

        return $product_list;
    }
}