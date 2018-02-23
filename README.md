# Omeka Blogger

A plugin for [Omeka Classic](http://omeka.org/classic/), eliminating the need
to recreate the behaviour of a blog using Simple Pages.

Instead, this plugin allows you to present any RSS feed as a list of blog
posts. This means that you can let a blogging platform like Wordpress handle
the blog functionality and simply include that content into your Omeka site.

All you have to do is add a shortcode to your simple page, and this plugin
will automatically fetch and render the blog posts for you.

## How do I use this?

Just add the following shortcode in your Simple Page: 

`[blog url=http://example.com/blog]`

The URL parameter is required, and should provide the URL to the RSS feed you
would like to embed.

The plugin provides a number of parameters to tweak the behaviour of the
plugin:

### Display
* `display=long` renders the full content of each blog post in the page.
* `display=short` renders a shorter version of the blog post in the page.

For example: 

`[blog url=http://example.com/blog display=short]`

**Default value:** `long` if not specified.

### Limit
Limits the number of posts to include in the page.

For example, the following will include at most 5 blog posts: 

`[blog url=http://example.com/blog limit=5]`

**Default value:** displays all posts if not specified.

### Links
Control wether the blog titles are presented as links or not.
* `links=true` will present blog titles as links pointing to the source blog post.
* `links=false` will present the blog titles as plain text.

For example: 

`[blog url=http://example.com/blog links=true]`

**Default value:** false if not specified.

### More
Controls whether a link to the blog is presented at the bottom of the blog
list.

* `more=true` will include a _More_ link
* `more=false` will not include a _More_ link.

For example:

`[blog url=http://example.com/blog more=true]`

**Default Value:** false if not specified.
