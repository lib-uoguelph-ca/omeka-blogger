<?php

require_once dirname(__FILE__) . '/functions.php';

/**
 * The UG PDF Index plugin.
 */
class BloggerPlugin extends Omeka_Plugin_AbstractPlugin
{
    
    protected $_hooks = array(
    );

    public function setUp() {
        add_shortcode('blog', array('BloggerPlugin', 'renderBlog'));
        parent::setUp();
    }

    public function renderBlog($args, $view) {

        if (!isset($args['url'])) {
            return;
        }
        
        $feed = array();
        try {
            $feed = new Zend_Feed_Rss($args['url']);
        }
        catch(Exception $e) {
        
        }

        $limit = 0;
        if(isset($args['limit'])) {
            $limit = (int)$args['limit'];
        }

        $links = FALSE;
        if(isset($args['links'])) {
            $links = (bool)$args['links'];
        }

        $more = FALSE;
        if(isset($args['more'])) {
            $more = (bool)$args['more'];
        }

        $html = $view->partial('blog.php', array('posts' => $feed, 'limit' => $limit, 'links' => $links, 'more' => $more));
        return $html;
    }


   
}
