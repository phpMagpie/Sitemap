<?php

Router::parseExtensions('xml');  //parse XML extension
CroogoRouter::connect('/sitemap.xml', array('plugin' => 'sitemap', 'controller' => 'sitemap', 'action' => 'index'));
?>