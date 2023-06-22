<?php

namespace Modules\Setting\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;

class SettingController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Setting::Search(request('search'))->paginate(env('PAGINATION_NUMBER', 10));
        return view('setting::dashboard.list', compact('objects'));
    }

    public function create()
    {
        return view('setting::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('setting::show');
    }

    public function edit($id)
    {
        return view('setting::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
