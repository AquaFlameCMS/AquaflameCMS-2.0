DROP TABLE IF EXISTS `website_news`;
CREATE TABLE `website_news` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(40) NOT NULL DEFAULT 'Empty Title',
	`content` MEDIUMTEXT NOT NULL,
	`thumbnailPath` MEDIUMTEXT NOT NULL,
	`datePosted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`author` VARCHAR(50) NOT NULL DEFAULT 'Anonymous',
	`visits` MEDIUMINT(8) UNSIGNED NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci' ENGINE=MyISAM;

INSERT INTO `website_news` (`id`, `name`, `content`, `thumbnailPath`, `datePosted`, `author`, `visits`) VALUES (1, 'Test Title', 'gdss', 'assets/uploads/images/newsarticle1.png', '2012-10-21 13:05:06', 'FailZorD', '0');
INSERT INTO `website_news` (`id`, `name`, `content`, `thumbnailPath`, `datePosted`, `author`, `visits`) VALUES (2, 'hdrd', 'hhdrh', 'assets/uploads/images/newsarticle2.png', '2012-10-21 13:05:06', 'FailZorD', '0');

