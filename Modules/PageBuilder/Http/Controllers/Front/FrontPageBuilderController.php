<?php

namespace Modules\PageBuilder\Http\Controllers\Front;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\PageBuilder\Http\Requests\PageBuilderRequest;

class FrontPageBuilderController extends Controller
{
    use Responses;

    public function page($lang, $slug)
    {
        $object = PageBuilder::FindBySlug($lang, $slug);
        $other_pages = PageBuilder::all()->where('is_active', 1)->except([$object->id]);

        return view('pagebuilder::front.page', compact('object', 'other_pages'));
    }
}
