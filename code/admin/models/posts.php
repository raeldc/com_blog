<?php
/**
 * com_error   	Developed using Nooku Framework 0.7  
 * @version     $Id: posts.php 32 2010-07-28 14:48:10Z copesc $
 * @package		com_error
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 * @link 		http://www.joocode.com
 */

class ComBlogModelPosts extends KModelTable
{
    public function __construct(KConfig $config) 
	{
		$config['table_behaviors'] = array('creatable', 'modifiable', 'sluggable'); 

		parent::__construct($config);
	}
	
	protected function _buildQueryOrder(KDatabaseQuery $query)
    {
		parent::_buildQueryOrder($query);
    }

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->getState();
		
		if ($state->search) 
		{
			$search = '%'.$state->search.'%';
			$query->where('tbl.title', 'LIKE',  $search);
			$query->where('tbl.text', 'LIKE',  $search, 'OR');
		}
		
		parent::_buildQueryWhere($query);
	}
}