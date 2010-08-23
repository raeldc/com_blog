<?php
/**
 * com_jes      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: posts.php 32 2010-07-28 14:48:10Z copesc $
 * @package		Juf
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogModelPosts extends KModelTable
{	
    public function __construct(KConfig $config) 
	{
		$config['table_behaviors'] = array('creatable', 'sluggable'); 
		parent::__construct($config);
		
		// Set the state
		$this->getState()
		 	->insert('enabled'  , 'int')
		 	->insert('blog_blog_id'  , 'int')
		 	->insert('blog_post_id'  , 'int');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		parent::_buildQueryWhere($query);

		$state = $this->getState();
	
		if($state->blog_blog_id) 
		{
			$query->where('blog_blog_id', '=', $state->blog_blog_id);
       	}
       	if($state->enabled) 
		{
			$query->where('enabled', '=', $state->enabled);
       	}
	}
	
	protected function _buildQueryOrder(KDatabaseQuery $query)
	{
		$query->order('created_on', 'DESC');
	}

	/**
	 * Get the post comments
	 * 
	 * @return KDatabaseRowset The comments of this post
	 */
	public function getComments($id) 
	{
		return KFactory::get('site::com.blog.model.comments')->blog_post_id($id)->getList();
	}
	
	/**
	 * Get the post title. The post id is set via $state
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
			->from('blog_posts AS tbl')
			->where('tbl.blog_post_id', '=', $state->id);
					
		return $title = $database->fetchField($query);
	}
}