<?php
/**
 * com_blog      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: feed.php 46 2010-08-02 08:11:33Z copesc $
 * @package		blog
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogViewPostsFeed extends KViewAbstract
{
	public function display()
	{	
		//Set the document link
		$this->_document->link = $this->createRoute('format=html&view=posts&blog_blog_id='.KRequest::get('get.id','int'));
		
		//Get the list of posts
		$posts = KFactory::get($this->getModel())->getList();
		
		foreach ( $posts as $post )
		{
			// strip html from feed item title
			$title = html_entity_decode( $post->title );

			// url link to article
			$link = $this->createRoute('format=html&view=post&slug='.$post->slug );

			// generate the description as a hcard
			$description = $post->text;
			
			// load individual item creator class
			$item = new JFeedItem();
			$item->title 		= $title;
			$item->link 		= $link;
			$item->description 	= $description;
			$item->date			= date( 'r', strtotime($post->created_on) );
			$item->category   	= '';

			// loads item info into rss array
			$doc =& JFactory::getDocument();
			$doc->addItem( $item );
		}

		return $this;
	}
}