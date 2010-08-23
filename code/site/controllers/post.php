<?php
/**
 * com_blog   	Developed using Nooku Framework 0.7  
 * @version     $Id: post.php 32 2010-07-28 14:48:10Z copesc $
 * @package		blog JooCode Blog Platform
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogControllerPost extends ComDefaultControllerDefault 
{
	public function __construct(KConfig $config)
	{
		//show only enabled posts in the posts view
		if (KInflector::isPlural(KRequest::get('get.view', 'string'))) 
		{
			$config->request->enabled = 1;
		}

		parent::__construct($config);
	}
}