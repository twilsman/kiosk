DROP TABLE IF EXISTS `Pledges`;

CREATE TABLE `Pledges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` char(2) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
)

