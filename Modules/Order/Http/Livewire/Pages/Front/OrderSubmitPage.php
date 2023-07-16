<?php

namespace Modules\Order\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Blog\Entities\Blog;
use Modules\Coupon\Entities\Coupon;
use Modules\Product\Entities\Category;

class OrderSubmitPage extends Component
{
    public $website_title = '';
    public $lang;

    public $coupon_code;

    public function CheckCouponCode()
    {
        $result = Coupon::CheckCoupon($this->coupon_code, auth()->id());
        if (!isset($result['error']))
            $this->coupon_code = null;

        $this->dispatchBrowserEvent('couponCodeChecked', ['result' => $result]);
    }

    public function render()
    {
        $data = [
            'blogs' => Blog::latest()->get(),
            'categories' => Category::latest()->get()
        ];
        return view('order::livewire.pages.front.order-submit-page', $data);
    }
}
