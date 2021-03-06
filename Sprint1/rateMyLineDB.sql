CREATE DATABASE IF NOT EXISTS rmlDB;
GRANT ALL PRIVILEGES ON rmlDB.* to 'rmluser'@'localhost' identified by 'assist';
USE rmlDB;

CREATE TABLE IF NOT EXISTS `users` (
`id` int(5) NOT NULL AUTO_INCREMENT,
`username` varchar(20) NOT NULL,
`password` varchar(40) NOT NULL,
PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(5) NOT NULL AUTO_INCREMENT,
`username` varchar(20) NOT NULL,
`post` blob(100000),
`likes` int(3) NOT NULL,
`dislikes` int(3) NOT NULL,
PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `likes` (
`like_id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`post_id` int(11) NOT NULL,
PRIMARY KEY (`like_id`)
);

CREATE TABLE IF NOT EXISTS `dislikes` (
`dislike_id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`post_id` int(11) NOT NULL,
PRIMARY KEY (`dislike_id`)
);

CREATE INDEX `postindex` ON `posts` (`username`, `post`);
