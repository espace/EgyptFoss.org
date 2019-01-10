# Generated by DBDiff
# On 05/31/2016 04:44:46 pm

CREATE TABLE IF NOT EXISTS `wpRuvF8_request_threads` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `request_id` bigint(20) NOT NULL,
  `owner_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `seen_by_owner` tinyint(4) NOT NULL DEFAULT '0',
  `seen_by_user` tinyint(4) NOT NULL DEFAULT '1',
  `responses_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `wpRuvF8_thread_responses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `thread_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;