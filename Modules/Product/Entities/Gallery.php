<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'image',
        'product_id',
    ];

    protected $search_fields  = [
        'product.title',
    ];

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function scopeFilter($query, $request)
    {
        $product_id = $request->product_id;
        if ($product_id) {
            $query->where('product_id', $product_id);
        }

        return $query;
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\GalleryFactory::new();
    }

    //

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
