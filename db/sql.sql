CREATE TABLE users(
id INT NOT NULL AUTO_INCREMENT,
login varchar(100),
pass varchar(100),
PRIMARY KEY (id)
)

CREATE TABLE posts(
id INT NOT NULL AUTO_INCREMENT,
title varchar(100),
post varchar(255),
PRIMARY KEY (id)
)