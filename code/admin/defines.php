<?php
/**
 * @version     $Id: defines.php 32 2010-07-28 14:48:10Z copesc $
 * @package		Profiles
 * @copyright	Copyright (C) 2009 - 2010 Nooku. All rights reserved.
 * @license     GNU GPL <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Profiles namespace
 *
 * Provides constants and metadata for profiles namespace such as version info
 * 
 *  @package	Profiles
 */
class ComBlog
{
    const _VERSION = '0.1.0';

    public static function getVersion()
    {
        return self::_VERSION;
    }
}