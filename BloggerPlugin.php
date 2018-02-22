<?php

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
        
        $channel = array();
        try {
            $channel = new Zend_Feed_Rss($args['url']);
        }
        catch(Exception $e) {
        
        }

        $limit = 0;
        if(isset($args['limit'])) {
            $limit = (int)$args['limit'];
        }
        
        $html = $view->partial('blog.php', array('posts' => $channel, 'limit' => $limit ));
        return $html;
    }


   
}
