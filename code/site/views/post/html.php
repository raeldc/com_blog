<?php
/**
 * com_blog     Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: html.php 42 2010-07-29 16:11:39Z copesc $
 * @package		blog
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogViewPostHtml extends ComDefaultViewHtml
{
	public function display()
	{
		/* Defaults to 'default' view */
		if (KFactory::get('lib.joomla.user')->id != KFactory::get('site::com.blog.model.blogs')->id(KRequest::get('get.blog_blog_id', 'int'))->getItem()->created_by) {
			$this->setLayout('default'); 
		}
	
		$model = KFactory::get($this->getModel());
		
		/* Document Title */
		$document = KFactory::tmp('lib.joomla.document');
		$document->setTitle($model->getItem()->title);	    

		/* Add RSS link */
		// $attribs = array('type' => 'application/rss+xml', 'title' => 'RSS 2.0');	
		// 		$this->_document->addHeadLink('http://feeds.feedburner.com/LearnerHQ', 'alternate', 'rel', $attribs);
		
		//Display the layout
		return parent::display();
	}
}