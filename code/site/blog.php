<?php 
/** 
 * @version     $Id: blog.php 4 2010-07-11 09:59:36Z copesc $
 * @package     blog 
 * @copyright   Copyright (C) 2009 Nooku. All rights reserved. 
 * @license     GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html> 
 * @link        http://www.nooku.org 
 */ 

// Check if Koowa is active 
if(!defined('KOOWA')) 
{ 
	JError::raiseWarning(0, JText::_("Koowa wasn't found. Please install the Koowa plugin and enable it.")); 
    return; 
} 
try 
{ 
	// Require the defines
	KLoader::load('site::com.blog.defines');

	// Create the controller dispatcher
	KFactory::get('site::com.blog.dispatcher')->dispatch(KRequest::get('get.view', 'cmd', 'posts'));
} 
catch (Exception $e) 
{ 
	//KFactory::get('site::com.error.controller.error')->manage($e);
	JError::raiseWarning(0, $e->getMessage()."<br/><br/>".nl2br($e->getTraceAsString()));
	
} 
