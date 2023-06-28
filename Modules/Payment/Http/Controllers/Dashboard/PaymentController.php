<?php

namespace Modules\Payment\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Payment\Entities\Payment;

class PaymentController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Payment::Search(request('search'))
            ->with(['user', 'coupon'])
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('payment::dashboard.list', compact('objects'));
    }
}
