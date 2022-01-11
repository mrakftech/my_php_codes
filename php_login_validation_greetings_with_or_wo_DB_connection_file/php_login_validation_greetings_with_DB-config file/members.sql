CREATE DATABASE club;

CREATE TABLE members(id INT(4) NOT NULL AUTO_INCREMENT,
username VARCHAR(65) NOT NULL, 
password VARCHAR(65) NOT NULL,
PRIMARY KEY (id)) ENGINE = MyISAM;

INSERT INTO members(id,username,password) VALUES(1,'Malik','12345')