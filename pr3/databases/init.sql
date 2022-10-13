CREATE DATABASE IF NOT EXISTS userDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON userDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE userDB;
CREATE TABLE IF NOT EXISTS users (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(20) NOT NULL,
  PRIMARY KEY (ID)
);


CREATE TABLE IF NOT EXISTS auth (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(20) NOT NULL,
  password CHAR(40) NOT NULL,
  PRIMARY KEY (ID)
);

#MD5 encryption of the password (made by htpasswd)

INSERT INTO auth (username, password)
SELECT * FROM (SELECT 'user1', '$apr1$g/9PpRf1$Tl9zPvUnToKdiGt8hRap//') AS tmp
WHERE NOT EXISTS (
    SELECT username FROM auth WHERE username = 'user1'
) LIMIT 1;





#——————————————————————————————————————————————————————— 


INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Alex', 'Rover') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Alex' AND surname = 'Rover'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Bob', 'Marley') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Bob' AND surname = 'Marley'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Alex', 'Rover') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Alex' AND surname = 'Rover'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Kate', 'Yandson') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Kate' AND surname = 'Yandson'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Lilo', 'Black') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Lilo' AND surname = 'Black'
) LIMIT 1;