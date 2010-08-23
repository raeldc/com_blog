<?php
/**
 * com_blog      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: html.php 42 2010-07-29 16:11:39Z copesc $
 * @package		blog
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogViewPostsHtml extends ComDefaultViewHtml
{
	public function display()
	{
		$this->setLayout('default'); 
		
		if (!KRequest::get('get.blog_blog_id', 'int')) 
		{
			KRequest::set('get.blog_blog_id', 1);
		}

		/* Add RSS link */
		// $attribs = array('type' => 'application/rss+xml', 'title' => 'RSS 2.0');
		// $this->_document->addHeadLink('http://feeds.feedburner.com/LearnerHQ', 'alternate', 'rel', $attribs);

		/* get the current user id */
		$this->assign('userid', $userid = KFactory::tmp('lib.joomla.user')->id);
				
		//Display the layout
		return parent::display();
	}
}