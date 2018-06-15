
DROP TABLE IF EXISTS `vueCrudData`;

CREATE TABLE `vueCrudData` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `profession` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);

