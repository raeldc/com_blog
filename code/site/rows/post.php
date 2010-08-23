<?php
/**
 * com_blog      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: post.php 4 2010-07-11 09:59:36Z copesc $
 * @package		blog
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogRowPost extends KDatabaseRowAbstract 
{ 
	/**
	 * Count the comments of the post
	 * 
	 * @return int The number of comments this post have
	 */
    public function countComments() 
	{	
		return KFactory::get('site::com.blog.model.comments')->blog_post_id($this->id)->getTotal();	
	}
} 