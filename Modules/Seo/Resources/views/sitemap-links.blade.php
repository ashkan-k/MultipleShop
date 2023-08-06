<!DOCTYPE html>
<html>
<head>
    <title>Sitemap Links</title>
</head>
<body>
<h1>Sitemap Links</h1>
<ul>
    <li><a href="{{ route('sitemap') }}">All Sitemaps</a></li>
    <li><a href="{{ route('sitemap.products') }}">Product Sitemap</a></li>
    <li><a href="{{ route('sitemap.product.categories') }}">Product Categories Sitemap</a></li>
    <li><a href="{{ route('sitemap.blog') }}">Blog Sitemap</a></li>
    <li><a href="{{ route('sitemap.blog.categories') }}">Blog Categories Sitemap</a></li>
    <li><a href="{{ route('sitemap.pages') }}">Pages Sitemap</a></li>
    <!-- Add more sitemap links if needed -->
</ul>
</body>
</html>
