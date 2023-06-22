<?php

namespace Modules\Setting\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    use Responses;

    public function index()
    {
        return view('setting::dashboard.list');
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
