<?php
require 'goygoy.php';
require  'm.php';

echo "++ G0yg0y is starting ++ <br>";

	$database = new medoo([

		'database_type' => 'mysql',
		'database_name' => "old",
		'server' => '127.0.0.1',
		'username' => $u,
		'password' => $p,
		'charset' => 'utf8',
	 
		'port' => 3306,
	 
	 
		'option' => [
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		]
	]);

$database->query("

DROP TABLE IF EXISTS old.cargo, old.users, old.comments;

CREATE TABLE IF NOT EXISTS `cargo` (
`id` int(32) NOT NULL,
  `no` bigint(32) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;



INSERT INTO `cargo` (`id`, `no`, `status`) VALUES
(1, 100, 'Ali\'s cargo on the way'),
(2, 101, 'Mehmet\'s cargo on the way');


CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(1, 'guest', '084e0343a0486ff05530df6c705c8bb4');


CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `comment` longblob
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


ALTER TABLE `cargo`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `cargo`
MODIFY `id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;


");



sleep(3);
header("Location: login.php");
exit;
//var_dump( $database->log() );

?>