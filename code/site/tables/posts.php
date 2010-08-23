<?php
/**
 * com_blog      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: posts.php 4 2010-07-11 09:59:36Z copesc $
 * @package		blog
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComBlogTablePosts extends KDatabaseTableAbstract 
{ 
	/**
	 * Filter the data, 'text' is a raw Column (because only administrators use this)
	 */	
    public function filter($data) 
    { 
        settype($data, 'array'); //force to array 
		if ($data['text']) 
		{
	    	$this->getColumn('text')->filter = KFactory::tmp('lib.koowa.filter.raw'); 
		}
        return parent::filter($data); 
    } 
} 
