<?php

namespace Modules\Blog\Http\Controllers\Front;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\Seo\Helpers\SchemaHelper;
use Modules\User\Entities\User;

class FrontBlogController extends Controller
{
    use Responses, Uploader;

    public function blogs($lang, $category_slug = null)
    {
        if ($category_slug){
            $blog_category = BlogCategory::FindBySlug($lang, $category_slug);

            SEOMeta::setTitle($blog_category->get_title($lang));
            SEOMeta::setDescription(__('Category articles of :cat', ['cat' => $blog_category->get_title($lang)]));
        }else{
            SEOMeta::setTitle(__('Blogs'));
            SEOMeta::setDescription(__('Our Website Blog'));
        }
        return view('blog::front.blogs', compact('category_slug'));
    }

    public function blog_detail($lang, $slug)
    {
        $blog = Blog::FindBySlug($lang, $slug);

        // Seo
        $blog_schema = SchemaHelper::GetArticleSchema($blog);
        SEOMeta::setTitle($blog->get_title($lang));
        SEOMeta::setDescription(strip_tags($blog->get_text($lang)));

        return view('blog::front.blog-detail', compact('blog', 'blog_schema'));
    }
}
