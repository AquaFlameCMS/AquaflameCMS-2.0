DROP TABLE IF EXISTS `website_comments`;
CREATE TABLE `website_comments` (
	`id` INT(10) NULL AUTO_INCREMENT,
	`character_id` INT(10) NOT NULL DEFAULT '0',
	`object_id` INT(10) NOT NULL DEFAULT '0',
	`object_type` INT(2) NOT NULL DEFAULT '0',
	`content` MEDIUMTEXT NOT NULL,
	`date_posted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`, `object_id`, `character_id`),
	INDEX `character_id` (`character_id`, `object_id`),
	INDEX `object_id` (`object_id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;
