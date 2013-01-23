CREATE TABLE `js_errors` (
  `error_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `url` mediumtext NOT NULL,
  `line_number` varchar(100) NOT NULL,
  `stack_trace` mediumtext NOT NULL,
  `browser` varchar(50) NOT NULL,
  `error_time` datetime NOT NULL,
  PRIMARY KEY (`error_id`)
)
