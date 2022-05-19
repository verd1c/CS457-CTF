#!/bin/bash

mkdir -p /run/mysqld
chown -R mysql:mysql /run/mysqld
mysql_install_db --user=mysql --ldata=/var/lib/mysql
mysqld --user=mysql --console --skip-name-resolve --skip-networking=0 &

# Wait for mysql to start
while ! mysqladmin ping -h'localhost' --silent; do echo "not up" && sleep .2; done

mysql -u root << EOF
CREATE DATABASE CS457;
CREATE USER 'user'@'%' IDENTIFIED BY 'makjrwasnothere';;
USE CS457;
CREATE TABLE admin (
  id  INT NOT NULL AUTO_INCREMENT,
  acc VARCHAR(255) NOT NULL,
  pw  VARCHAR(255) NOT NULL,
  PRIMARY KEY(id)
);
INSERT INTO admin VALUES (1, 'admin', 'Sup3rDup3rP@ssw0rd123456');
GRANT ALL PRIVILEGES ON CS457.* TO 'user'@'%';
FLUSH PRIVILEGES;
EOF

apache2-foreground
