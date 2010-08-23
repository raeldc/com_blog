<?php
/**
 * @version		$Id: blog.php 32 2010-07-28 14:48:10Z copesc $
 * @package		blog
 * @copyright	Copyright (C) 2010 Joocode. All rights reserved.
 * @license 	GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link     	http://www.nooku.org
 */

// Check if Koowa is active
if(!defined('KOOWA')) {
    JError::raiseWarning(0, JText::_("Koowa wasn't found. Please install the Koowa plugin and enable it."));
    return;
}

// Require the defines
KLoader::load('admin::com.blog.defines');
KFactory::map('lib.koowa.template.helper.behavior', 'admin::com.blog.helper.behavior'); 
 
// Create the controller dispatcher
KFactory::get('admin::com.blog.dispatcher')->dispatch(KRequest::get('get.view', 'cmd', 'posts'));
