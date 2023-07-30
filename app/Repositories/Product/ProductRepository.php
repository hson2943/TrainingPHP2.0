namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    protected $product_model;
    protected $limit;
    protected $limit_relative;

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