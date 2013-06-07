DROP TABLE IF EXISTS `website_forum_categories`;
DROP TABLE IF EXISTS `website_forum_forums`;

CREATE TABLE `website_forum_forums` (
	`id` INT(10) NULL,
	`name` VARCHAR(50) NULL,
	`description` VARCHAR(50) NULL,
	`category` INT NULL,
	`icon` VARCHAR(50) NULL
)
COMMENT='Here you can find the Forums with Posts.'
COLLATE='utf8_general_ci'
ENGINE=MyISAM;


CREATE TABLE `website_forum_categories` (
	`id` INT(10) UNSIGNED NULL,
	`name` VARCHAR(50) NULL
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

insert into `website_forum_categories` (`id`, `name`) values('1','AquaFlame CMS');
insert into `website_forum_categories` (`id`, `name`) values('2','theadriann');

insert into `website_forum_forums` (`id`, `name`, `description`, `category`, `icon`) values('1','General','General Discussion...','1','tech_support.gif');
insert into `website_forum_forums` (`id`, `name`, `description`, `category`, `icon`) values('2','Updates','AquaFlameCMS Updates','1','status.gif');
insert into `website_forum_forums` (`id`, `name`, `description`, `category`, `icon`) values('3','Contact','Blah blah blah blah..','2','customer_support.gif');