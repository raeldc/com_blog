CREATE TABLE IF NOT EXISTS `jos_blog_blogs` (
  `blog_blog_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `created_by` int(11) unsigned NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`blog_blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `jos_blog_posts` (
  `blog_post_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_blog_id` bigint(20) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` mediumtext COMMENT '@Filter("raw")',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `enabled` binary(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`blog_post_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jos_blog_posts`
--

INSERT INTO `jos_blog_posts` (`blog_post_id`, `blog_blog_id`, `title`, `slug`, `text`, `created_by`, `created_on`, `modified_by`, `modified_on`, `enabled`) VALUES
(1, 1, 'Title', 'title', '<p>Text</p>', 62, '2010-08-05 09:26:57', 62, '2010-08-04 16:14:59', '1');

INSERT INTO `jos_blog_blogs` (`blog_blog_id`, `title`, `created_by`, `created_on`) VALUES
(1, 'Blog', 0, '0000-00-00 00:00:00');