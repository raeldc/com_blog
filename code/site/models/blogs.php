<?php
/**
 * com_jes      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: blogs.php 4 2010-07-11 09:59:36Z copesc $
 * @package		Juf
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */


class ComBlogModelBlogs extends KModelTable
{	
    public function __construct(KConfig $config) 
	{
		$config['table_behaviors'] = array('creatable'); 
		
		parent::__construct($config);
	}
	
	/**
	 * Get the blog title. The blog id is set via $state
	 * 
	 * @return string The course title
	 */	
	public function getTitle()
	{		
		$state = $this->getState();

		$table = KFactory::get($this->getTable());
		$database = $table->getDatabase();
		$query = $database->getQuery();

		$query->select('tbl.title')
			->from('blog_blogs AS tbl')
			->where('tbl.blog_blog_id', '=', $state->id);
					
		return $title = $database->fetchField($query);
	}
}