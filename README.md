	/**
	 * com_blog   	Developed using Nooku Framework 0.7  
	 * @package		com_blog
	 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
	 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
	 */

This component can be used to create a blog in your website/webapp. 

INSTALLATION
------------

Simply download the package and symlink from the Joomla installation

**/administrator:**
	
	ln -s com_blog_directory/admin com_blog
**/components:**
	
	ln -s com_blog_directory/site com_blog

USAGE
-----

Add a `com_blog` entry to the `jos_components` table and create the DB tables found in sql/

`com_blog` can manage post comments using `com_comments` (hosted comments), or using IntenseDebate.

Tested on Nooku Framework rev. 2513

WARNING
-------

To use intensedebate, you have to add to your template file both the IntenseDebate account API key

	<script>
	var idcomments_acct = '*************************';
	var idcomments_post_id;
	var idcomments_post_url;
	</script>

And the code to insert the comments, after calling the component:

	<? if (KRequest::get('get.view', 'string') == 'post' && KRequest::get('get.layout', 'string') != 'form') : ?>
		<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>
	<? endif; ?>

I plan to solve this hassle in a future revision.