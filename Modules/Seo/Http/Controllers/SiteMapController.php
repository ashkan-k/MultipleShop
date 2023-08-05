<?php

namespace Modules\Seo\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Product\Entities\Product;

class SiteMapController extends Controller
{
    public function sitemapLinks()
    {
        $sitemap = Sitemap::create();

        $sitemap->add(Url::create(route('sitemap.products'))->setPriority(1.0));
        $sitemap->add(Url::create(route('sitemap.blog'))->setPriority(0.9));

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapProducts()
    {
        $sitemap = Sitemap::create();

        // Add URLs for your shop sitemap
        $products = Product::where('is_active', 1)->get();
        foreach ($products as $product) {
            $sitemap->add(Url::create(route('product_detail', $product->slug))->setPriority(1.0));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapBlogs()
    {
        $sitemap = Sitemap::create();

        // Add URLs for your blog sitemap
        $blogs = Blog::where('status', 'publish')->get();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create(route('blog_detail', $blog->slug))->setPriority(0.9));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }
}
