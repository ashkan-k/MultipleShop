<?php

namespace Modules\Seo\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;
use Modules\PageBuilder\Entities\PageBuilder;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SiteMapController extends Controller
{
    public function sitemapLinks()
    {
        $sitemap = Sitemap::create();

        $sitemap->add(Url::create(route('sitemap.products'))->setPriority(1.0));
        $sitemap->add(Url::create(route('sitemap.product.categories'))->setPriority(0.8));
        $sitemap->add(Url::create(route('sitemap.blog'))->setPriority(0.9));
        $sitemap->add(Url::create(route('sitemap.blog.categories'))->setPriority(0.7));
        $sitemap->add(Url::create(route('sitemap.pages'))->setPriority(0.6));

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapProducts($lang)
    {
        $sitemap = Sitemap::create();

        // Add URLs for your shop sitemap
        $products = Product::where('is_active', 1)->get();
        foreach ($products as $product) {
            $sitemap->add(Url::create(route('product_detail', $product->get_slug($lang)))->setPriority(1.0));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapProductCategories($lang)
    {
        $sitemap = Sitemap::create();

        // Add URLs for your shop sitemap
        $categories = Category::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create(route('category.products', $category->get_slug($lang)))->setPriority(0.8));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapBlogs($lang)
    {
        $sitemap = Sitemap::create();

        // Add URLs for your blog sitemap
        $blogs = Blog::where('status', 'publish')->get();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create(route('blog_detail', $blog->get_slug($lang)))->setPriority(0.9));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapBlogCategories($lang)
    {
        $sitemap = Sitemap::create();

        // Add URLs for your shop sitemap
        $categories = BlogCategory::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create(route('blog_category_list', $category->get_slug($lang)))->setPriority(0.7));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }

    public function sitemapPages($lang)
    {
        $sitemap = Sitemap::create();

        // Add URLs for your blog sitemap
        $pages = PageBuilder::where('is_active', 1)->get();
        foreach ($pages as $page) {
            $sitemap->add(Url::create(route('page', $page->get_slug($lang)))->setPriority(0.6));
        }

        return response($sitemap->render())->header('Content-Type', 'text/xml');
    }
}
