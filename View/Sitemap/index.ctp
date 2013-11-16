<?php /* sitemap generation */ ?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo Router::url('/', true); ?></loc>
        <changefreq>daily</changefreq>
        <lastmod><?php echo trim($this->Time->toAtom(time())); ?></lastmod>
        <priority>1.0</priority>
    </url>

    <?php foreach ($nodes as $node): ?>
        <url>
            <loc>
                <?php
                echo Router::url('/' . $node['Node']['type'] . '/' . $node['Node']['slug'], true);
                ?>
            </loc>
            <changefreq>daily</changefreq>
            <lastmod><?php echo trim($this->Time->toAtom(time())); ?></lastmod>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
    <url>
        <loc><?php echo Router::url('/contact', true); ?></loc>
        <changefreq>daily</changefreq>
        <lastmod><?php echo trim($this->Time->toAtom(time())); ?></lastmod>
        <priority>0.7</priority>
    </url>
</urlset>