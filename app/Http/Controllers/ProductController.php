<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ProductService;
use App\Services\GalleryService;
class ProductController extends Controller
{

    protected $product_service;
    protected $gallery_service;

    public function __construct(ProductService $product_service,GalleryService $gallery_service)
    {
        $this->product_service = $product_service;
        $this->gallery_service =$gallery_service;
    }
    public function getProduct(Request $request)
    {
        $data_search = $request->all();
        $product_list = $this->product_service->getProduct($data_search);
        return $this->getResponse(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK], $product_list);
    }

     /**
    * Store a new product based on the provided request.
    *
    * @param  \Illuminate\Http\Request  $request

    * @return \Illuminate\Http\JsonResponse
    */
    public function store(Request $request)
    {
        // $product = $request->all();
        $product = $this->product_service->store( $request);
        return $this->getResponse(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK], $product->toArray());
        
    }

    /**
    * Get a product by its ID.
    *
    * @param  int  $id

    * @return \Illuminate\Http\JsonResponse
    */
    public function getByID($id)
    {
        $products = $this->product_service->getById($id);
        return $this->getResponse(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK], $products->toArray());
        
    }

    /**
    * Update a product based on the provided request and product ID.
    *
    * @param  \Illuminate\Http\Request  $request

    * @param  int  $product_id

    * @return \Illuminate\Http\JsonResponse
    */
    public function update(Request $request, $product_id)
    {
        $product = $request->all();
        $this->product_service->update($product_id, $product);
        $galleries = json_decode($product['galleries']);
        $this->gallery_service->updateGallery($galleries, $product_id);
        return $this->getResponse(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK], $product);
        
    }
 
    /**
    * Delete a product by its ID.
    *
    * @param  int  $id

    * @return \Illuminate\Http\JsonResponse
    */
    public function delete($id)
    {
        $this->product_service->delete($id);
        return $this->getResponse(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK],[]);
        
    }
    
    /**
    * Get a list of relative products based on the provided product ID.
    *
    * @param  int  $id
    
    * @return \Illuminate\Http\JsonResponse
    */
    public function getRelativeProducts($id)
    {
        $list_products = $this->product_service->getRelativeProducts($id);
        return $this->getResponse(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK], $list_products->toArray());
        
    }
}
