CRUD-template
=============

This is easy start template to make CRUD site.
Create DB tables 

CREATE TABLE  `customers` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 100 ) NOT NULL ,
`email` VARCHAR( 100 ) NOT NULL ,
`mobile` VARCHAR( 100 ) NOT NULL,
`comment` VARCHAR( 100 ) NOT NULL
) ENGINE = INNODB;
