<?php

namespace App\Repositories\Category;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Get all gategory.
     * 
     * @return Category
     */
    function getCategoryList()
    {
        return $this->category->all();
    }
}
