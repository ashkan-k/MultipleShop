<?php

namespace Modules\Comment\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    public function index()
    {
        return view('comment::dashboard.list');
    }
}
