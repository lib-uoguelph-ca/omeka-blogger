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
        $channel = new Zend_Feed_Rss('https://uglib.wordpress.com/feed');

        foreach($channel as $item) {
            echo $item->title() . "\n";
        }
    }


   
}
