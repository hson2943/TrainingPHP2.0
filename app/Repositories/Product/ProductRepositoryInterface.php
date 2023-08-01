<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function getProduct($data_search);

    public function store($data);

    public function update($id, $data);

    public function delete($id);

    public function getRelativeProducts($id);
    
    public function getByID($id);
}