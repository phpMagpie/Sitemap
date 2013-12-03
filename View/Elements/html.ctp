<?php echo $this->Html->css("Sitemap.sitemap"); ?>
<?php foreach ($nodes as $node): ?>
    <ul class="sitemap">
        <li>
            <?php
            $url = Router::url('/' . $node['Node']['type'] . '/' . $node['Node']['slug'], true);
            echo $this->Html->link($node['Node']['title'], $url);
            ?>
        </li>
    </ul>
<?php endforeach; ?>