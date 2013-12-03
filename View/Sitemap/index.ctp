<?php if ($type == 'xml'): ?>
    <?php
    /* This will render xml layout */
    echo $this->element('Sitemap.xml');
    ?>
<?php else: ?>
    <?php
    /* This will render Html layout */
    echo $this->element('Sitemap.html');
    ?>
<?php endif; ?>