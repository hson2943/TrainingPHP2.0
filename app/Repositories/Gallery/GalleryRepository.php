<?php

namespace App\Repositories\Gallery;

use App\Models\Gallery;

class GalleryRepository implements GalleryRepositoryInterface
{

    protected $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }
    /**
     * remove .
     * 
     * @return Category
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
    }

    /**
 * Show galleries by product ID.
 *
 * @param  int  $id
 * @return Gallery
  */
    public function show($id)
    {
        return Gallery::where('product_id', $id)->orderBy('index', 'asc')->get();
    }

    /**
    * Update or create a gallery.
    *
    * @param  int  $product_id
    * 
    * @param  object  $data
    * 
    * @return void
    */
    public function updateOrCreate($product_id, $data)
    {
        Gallery::updateOrCreate(
            ['index' => $data->index],
            [
                'url_image' => $data->url_image,
                'product_id' => $product_id,
            ],
        );
    }
}
