<?php
/**
 * @version		$Id: html.php 32 2010-07-28 14:48:10Z copesc $
 * @package		Profiles
 * @copyright	Copyright (C) 2009 - 2010 Nooku. All rights reserved.
 * @license 	GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link     	http://www.nooku.org
 */

class ComBlogViewHtml extends ComDefaultViewHtml
{	
	public function display()
	{
		$name = $this->getName();
		
		//Apend enable and disbale button for all the list views
		if($name != 'dashboard' && KInflector::isPlural($name) && KRequest::type() != 'AJAX')
		{
			KFactory::get('admin::com.error.toolbar.'.$name)
				->append('divider')	
				->append('enable')
				->append('disable');	
		}
					
		return parent::display();
	}
}