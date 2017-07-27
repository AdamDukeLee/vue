
CREATE TABLE IF NOT EXISTS think_user(
id INT PRIMARY KEY AUTO_INCREMENT,
username varchar(20),
iphon varchar(20),
six tinyint
)ENGINE INNODB AUTO_INCREMENT=10000;

ALTER TABLE think_user ADD password char(20);


INSERT think_user(username,iphon,password) VALUES('黑崎一护','18516543004','123456'),('千与千寻','13566533004','123456');

INSERT think_user(username,iphon,six,password) VALUES('大脸猫','18516533004',1,'123456'),('蓝皮书','13516533004',0,'123456');

ALTER TABLE think_user ADD addr VARCHAR(50) AFTER username;

ALTER TABLE think_user CHANGE addr addr VARCHAR(60) AFTER id;
ALTER TABLE think_user drop addr;

CREATE TABLE IF NOT EXISTS think_case(
id INT primary key AUTO_INCREMENT,
img VARCHAR(40),
title VARCHAR(40),
abstract VARCHAR(40)
)ENGINE INNODB;

ALTER TABLE think_case MODIFY img VARCHAR(40);

INSERT think_case(img,title,abstract) VALUES('/img/case1.jpg','中国移动通信','提供完全定制化服务，基于项目开发、技术支持、器件供应一条龙服务。'),('/img/case2.jpg','中国石化','提供完全定制化服务，基于项目开发、技术支持、器件供应一条龙服务。')

INSERT think_case(img,title,abstract) VALUES('/img/case3.jpg','中国联通','提供完全定制化服务，基于项目开发、技术支持、器件供应一条龙服务。'),('/img/case4.jpg','中国电信','提供完全定制化服务，基于项目开发、技术支持、器件供应一条龙服务。')

CREATE TABLE IF NOT EXISTS think_product(
id INT PRIMARY KEY AUTO_INCREMENT,
img VARCHAR(50),
abstract VARCHAR(50),
createtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE INNODB;




