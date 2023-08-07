<?php

namespace Modules\PageBuilder\Http\Controllers\Front;

use App\Http\Traits\Responses;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\PageBuilder\Http\Requests\PageBuilderRequest;
use Modules\Seo\Helpers\SchemaHelper;

class FrontPageBuilderController extends Controller
{
    use Responses;

    public function page($lang, $slug)
    {
        $object = PageBuilder::FindBySlug($lang, $slug);
        $other_pages = PageBuilder::all()->where('is_active', 1)->except([$object->id]);

        // Seo
        $page_schema = SchemaHelper::GetPageSchema($object);
        SEOMeta::setTitle($object->get_title($lang));
        SEOMeta::setDescription(strip_tags($object->get_body($lang)));

        return view('pagebuilder::front.page', compact('object', 'other_pages', 'page_schema'));
    }
}
