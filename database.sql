CREATE DATABASE TheCloset;

USE TheCloset;


CREATE TABLE user (
	userID INT(10) NOT NULL UNIQUE PRIMARY KEY,
	username VARCHAR(10) NOT NULL UNIQUE,
	pass VARCHAR(10) NOT NULL,
	fname VARCHAR(20) NOT NULL,
	lname VARCHAR(20) NOT NULL,
	uAddress VARCHAR(300) NOT NULL,
	phone VARCHAR(15) NOT NULL,
);

CREATE TABLE product_type(
	ptype VARCHAR(10) NOT NULL PRIMARY KEY
);

CREATE TABLE product(
	pID int(3) NOT NULL PRIMARY KEY,
	pname VARCHAR(10) NOT NULL,
	price int(4) NOT NULL
	isfeature CHAR(1) 
	-- pamount int(3)
);

CREATE TABLE promocode(
	codeID VARCHAR(10) NOT NULL PRIMARY KEY,
	expDate date NOT NULL,
	-- camount int(3)
);

CREATE TABLE cartList(
	cartID VARCHAR(6) NOT NULL PRIMARY KEY,
	cusername VARCHAR(10) NOT NULL,
	CONSTRAINT FK_username FOREIGN KEY (cusername)
	REFERENCES user(username)
);

CREATE TABLE cart(
	userID 
	pID int(3) NOT NULL,
	CONSTRAINT FK_cartID  FOREIGN KEY (cartID)
	REFERENCES cartList(cartID),
	CONSTRAINT FK_pID  FOREIGN KEY (pID)
	REFERENCES product(pID)
);