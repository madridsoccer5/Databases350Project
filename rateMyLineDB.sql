CREATE DATABASE IF NOT EXISTS rmlDB;
GRANT ALL PRIVILEGES ON rmlDB.* to 'assist'@'localhost' identified by 'assist';
USE rmlDB;

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(5) NOT NULL AUTO_INCREMENT,
	`username` varchar(20) NOT NULL,
	`password` varchar(20) NOT NULL,
	PRIMARY KEY  (`id`)
)

