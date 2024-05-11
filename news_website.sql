create database news_website;
use news_website;
CREATE TABLE `news_website`.`news` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `news` VARCHAR(5000) NOT NULL,
  `image` VARCHAR(300) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));