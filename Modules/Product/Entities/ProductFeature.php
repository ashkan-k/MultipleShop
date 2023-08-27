<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductFeature extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'value',
        'product_id',
        'feature_id',
        'place',
        'price',
        'discount_price',
        'discount_start_date',
        'discount_end_date',
    ];

    protected $search_fields  = [
        'value',
        'product.title',
        'feature.title',
    ];

    protected $appends = [
        'get_place'
    ];

    public function getGetPlaceAttribute()
    {
       return $this->get_place();
    }

    public function calculate_discount_percent()
    {
        if (!$this->discount_price || !$this->discount_start_date || !$this->discount_end_date) {
            return 0;
        }

        $today = Verta::parse(\verta())->setTime(0, 0, 0, 0);
        $start_date = Verta::parse($this->discount_start_date);
        $end_date = Verta::parse($this->discount_end_date);

        if (!$today->gte($start_date) || !$today->lte($end_date)) {
            return 0;
        }

        $discount_percent = round(($this->discount_price * 100) / $this->price);
        return 100 - $discount_percent;
    }

    public function get_place()
    {
        if ($this->place == 'up'){
            return 'بالا';
        }elseif ($this->place == 'down'){
            return 'پایین';
        }
        return 'هر دو';
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFeatureFactory::new();
    }

    //

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
