ALTER TABLE `website_comments`
	ENGINE=InnoDB;
	
CREATE TABLE `website_votelinks` (
	`id` INT(2) UNSIGNED NOT NULL,
	`link` TEXT NOT NULL,
	`points` INT(4) UNSIGNED NOT NULL DEFAULT '0',
	`expiry` INT(8) UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

CREATE TABLE `website_votereward` (
	`id` INT(4) UNSIGNED NOT NULL,
	`requirement` INT(5) UNSIGNED NOT NULL DEFAULT '0',
	`itemID` INT(5) UNSIGNED NOT NULL DEFAULT '0',
	`goldCount` BIGINT(10) UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

CREATE TABLE `website_votestate` (
	`accountID` INT(10) UNSIGNED NOT NULL,
	`pointsCount` INT(10) UNSIGNED NOT NULL,
	`linkSave` TEXT NOT NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
