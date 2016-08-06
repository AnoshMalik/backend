CREATE DATABASE 'secure_login';

CREATE USER 'secure_user'@'localhost' IDENTIFIED BY 'enlahore99';
GRANT SELECT,UPDATE,INSERT,DELETE ON 'secure_login'.* TO 'secure_user'@'localhost';


CREATE TABLE 'secure_login'.'members'(
'id' INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
'username' VARCHAR(30) NOT NULL,
'email' VARCHAR(30) NOT NULL,
'password' VARCHAR(30) NOT NULL
) ENGINE = InnoDB;


CREATE TABLE 'secure_login'.'login_attempts'(
'user_id' INT(30) NOT NULL,
'time' VARCHAR(30) NOT NULL
)ENGINE= InnoDB;


INSERT INTO 'secure_login'.'members' VALUES(
1,'anosh','anoshmalik.am@gmail.com','enlahore99'
)

