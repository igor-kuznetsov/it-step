CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(255) NOT NULL,
  `password` CHAR(32) NOT NULL,
  `name` VARCHAR(255),
  `about` TEXT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `my_db2`.`users` (`login`, `password`, `name`, `about`)
VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'I am admin of this website.');