CREATE DATABASE IF NOT EXISTS userDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT,DELETE ON userDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE userDB;
CREATE TABLE IF NOT EXISTS users (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(20) NOT NULL,
  PRIMARY KEY (ID)
);



# POSTS 

CREATE TABLE IF NOT EXISTS posts (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(40) NOT NULL,
  p_date VARCHAR(20) NOT NULL,
  pic VARCHAR(20) NOT NULL,
  PRIMARY KEY (ID)
);


INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'Black Friday bundle', '18.11.21', 'news1.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Black Friday bundle'
) LIMIT 1;


INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'Psybolord at the Gradient', '04.11.21', 'news2.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Psybolord at the Gradient'
) LIMIT 1;

INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'Psybolord at the Electrofest', '18.10.21', 'Electro1.png') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Psybolord at the Electrofest'
) LIMIT 1;


INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'Psybolord at the RETROWAVE NIGHT', '17.10.21', 'news4.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Psybolord at the RETROWAVE NIGHT'
) LIMIT 1;

INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'Psybolord at the Hotel fest', '23.08.21', 'news5.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Psybolord at the Hotel fest'
) LIMIT 1;


INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT '5 years on stage', '06.08.21', 'news6.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = '5 years on stage'
) LIMIT 1;

INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'Sirin vinyl is already in stores', '31.07.21', 'news7.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Sirin vinyl is already in stores'
) LIMIT 1;


/*INSERT INTO posts (title, p_date, pic)
SELECT * FROM (SELECT 'The filming of the video is over', '22.12.20', 'news8.jpg') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'The filming of the video is over'
) LIMIT 1;

/*CREATE TABLE IF NOT EXISTS posts (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(40) NOT NULL,
  p_date VARCHAR(20) NOT NULL,
  PRIMARY KEY (ID)
);


INSERT INTO posts (title, p_date)
SELECT * FROM (SELECT 'Let it be title 1', '19.08.21') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Let it be title 1'
) LIMIT 1;


INSERT INTO posts (title, p_date)
SELECT * FROM (SELECT 'Let it be title 2', '17.10.21') AS tmp
WHERE NOT EXISTS (
    SELECT title FROM posts WHERE title = 'Let it be title 2'
) LIMIT 1;*/



#——————————————————————————————————————————————————————————— 
#MD5 encryption of the password (made by htpasswd)


CREATE TABLE IF NOT EXISTS auth (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(20) NOT NULL,
  password CHAR(128) NOT NULL,
  PRIMARY KEY (ID)
);

#MD5 encryption of the password (made by htpasswd)

INSERT INTO auth (username, password)
SELECT * FROM (SELECT 'user1', '$apr1$g/9PpRf1$Tl9zPvUnToKdiGt8hRap//') AS tmp
WHERE NOT EXISTS (
    SELECT username FROM auth WHERE username = 'user1'
) LIMIT 1;





#———————— USERS ———————— 


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


