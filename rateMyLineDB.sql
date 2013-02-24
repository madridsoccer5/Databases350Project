CREATE DATABASE IF NOT EXISTS rmlDB;
GRANT ALL PRIVILEGES ON rmlDB.* to 'assist'@'localhost' identified by 'assist';
USE rmlDB;

CREATE TABLE IF NOT EXISTS `users` (
`id` int(5) NOT NULL AUTO_INCREMENT,
`username` varchar(20) NOT NULL,
`password` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
)

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(5) NOT NULL AUTO_INCREMENT,
`username` varchar(20) NOT NULL,
`date` date NOT NULL,
`likes` int(3) NOT NULL,
`dislikes` int(3) NOT NULL,
PRIMARY KEY (`id`)
)
