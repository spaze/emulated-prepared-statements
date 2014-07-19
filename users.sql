CREATE TABLE `users` (
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

INSERT INTO `users` (`username`,`password`) VALUES ('foo','bar');
INSERT INTO `users` (`username`,`password`) VALUES ('waldo','quux');
