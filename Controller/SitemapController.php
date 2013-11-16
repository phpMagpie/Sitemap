<?php
App::uses('SitemapAppController', 'Sitemap.Controller');
/**
 * Sitemap Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package  Croogo
 * @version  2.1
 * @author   Appsbender <regz24@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.appsbender.com
 */
class SitemapController extends SitemapAppController {

    public $name = 'Sitemap';

    public function index() {
        $this->set('title_for_layout', __('Sitemap'));
        App::uses('Node', 'Nodes.Model');
        $this->Node = new Node();
        $this->set('nodes', $this->Node->find('all', array('conditions' => array('Node.type !=' => 'attachment', 'Node.status' => '1'))));
        $this->layout = 'xml/default';
        $this->response->type('xml');
    }

}

?>