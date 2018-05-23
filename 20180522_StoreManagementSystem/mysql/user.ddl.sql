CREATE TABLE `user` (
  `id` int(8) unsigned zerofill NOT NULL,
  `password` varchar(45) NOT NULL DEFAULT '',
  `name` varchar(45) NOT NULL DEFAULT '',
  `affiliation` int(11) NOT NULL DEFAULT '0',
  `del_flag` tinyint(4) NOT NULL DEFAULT '0',
  `regist_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8