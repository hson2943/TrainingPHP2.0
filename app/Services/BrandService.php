<?php

namespace App\Services;

use App\Repositories\Brand\BrandRepositoryInterface;

class BrandService
{
    protected $brand_repo;

    public function __construct(BrandRepositoryInterface $brand_repo)
    {
        $this->brand_repo = $brand_repo;
    }

    /**
    * Get all brands.
    *
    * @return \Illuminate\Database\Eloquent\Collection
    */
    function get()
    {
        return $this->brand_repo->get();
    }
}
