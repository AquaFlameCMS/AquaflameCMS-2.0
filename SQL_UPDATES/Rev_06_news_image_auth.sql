ALTER TABLE `website_news`
	CHANGE COLUMN `bigthumbnailPath` `imagePath` MEDIUMTEXT NOT NULL AFTER `thumbnailPath`;