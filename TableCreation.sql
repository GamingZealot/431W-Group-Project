/*
> mysql -u root -p
HOW TO: In mysql use command: source <PATH TO THIS FILE>
To start over use: DROP DATABASE cmpsc431w;
DESCRIBE <TABLE>;
SHOW DATABASES;
*/

CREATE DATABASE cmpsc431w;
USE cmpsc431w;

CREATE TABLE Categories(
	categoryId	INTEGER		NOT NULL,
	parentId	INTEGER,
	categoryName	VARCHAR(20)	NOT NULL,
	PRIMARY KEY(categoryId),
	FOREIGN KEY(parentId) REFERENCES Categories(categoryId)
);

CREATE TABLE Items(
	itemId		INTEGER		NOT NULL AUTO_INCREMENT,
	format		VARCHAR(20),
	location	VARCHAR(40), 
	description	VARCHAR(500),
	PRIMARY KEY(itemId) 
);

CREATE TABLE Sellers(
	sellerId	INTEGER		NOT NULL AUTO_INCREMENT,
	companyName	VARCHAR(100), 
	revenue	DEC(10,2),
	PRIMARY KEY(sellerId)
);

CREATE TABLE Movies(
	movieId		INTEGER		NOT NULL AUTO_INCREMENT,
	title		VARCHAR(50)	NOT NULL,
	year		INTEGER,
    pictureUrl	VARCHAR(500),
	synopsis	VARCHAR(500),
	UNIQUE(title, year),
	PRIMARY KEY(movieId)
);

CREATE TABLE Categorized_as(
	categoryId	INTEGER		NOT NULL,
	itemId		INTEGER		NOT NULL,
	PRIMARY KEY(categoryId, itemId),
	FOREIGN KEY(categoryId) REFERENCES Categories(categoryId),
	FOREIGN KEY(itemId) REFERENCES Items(itemId)
);

CREATE TABLE Is_Movie(
	itemId		INTEGER		NOT NULL,
	movieId		INTEGER		NOT NULL,
	PRIMARY KEY(itemId, movieId),
	FOREIGN KEY(itemId) REFERENCES Items(itemId),
	FOREIGN KEY(movieId) REFERENCES Movies(movieId)
);

CREATE TABLE Users(
	uid 		INTEGER		NOT NULL AUTO_INCREMENT,
	email		VARCHAR(50)	NOT NULL,
	password	VARCHAR(100)	NOT NULL,
	name		VARCHAR(50),
	addressStreet	VARCHAR(50), 
	addressCity	VARCHAR(50),
	addressState	VARCHAR(50),	
	addressZip	VARCHAR(50),
	phone		VARCHAR(20),
	age		INTEGER,
	ratingAvg	FLOAT(3,1),
	totalRatings	INTEGER,
	UNIQUE(email),
	PRIMARY KEY(uid)
);

CREATE TABLE Sold_By(
	itemId		INTEGER		NOT NULL,
	sellerId	INTEGER		NOT NULL,
	PRIMARY KEY(itemId, sellerId),
	FOREIGN KEY(sellerId) REFERENCES Sellers(sellerId),
	FOREIGN KEY(itemId) REFERENCES Items(itemId)	
);

CREATE TABLE Is_Seller(
	uid 		INTEGER		NOT NULL,
	sellerId	INTEGER		NOT NULL,
	PRIMARY KEY(uid, sellerId),
	FOREIGN KEY(uid) REFERENCES Users(uid),
	FOREIGN KEY(sellerId) REFERENCES Sellers(sellerId)
);

CREATE TABLE SaleItems(
	stock 		INTEGER		NOT NULL,
	price		REAL		NOT NULL,
	itemId		INTEGER,
	FOREIGN KEY(itemId) REFERENCES Sold_By(itemId)
);

CREATE TABLE RentableItems(
	rentPrice	REAL		NOT NULL,
	itemId		INTEGER,
	availability	BOOLEAN,
	FOREIGN KEY(itemId) REFERENCES Sold_By(itemId)
);

CREATE TABLE AuctionItems(
	endTime 	DATETIME	NOT NULL,
	currentBid	REAL		NOT NULL,
	reservePrice	REAL		NOT NULL,
	itemId		INTEGER,
	FOREIGN KEY(itemId) REFERENCES Sold_By(itemId)
);

CREATE TABLE CreditCards(
	cardId		Integer		NOT NULL AUTO_INCREMENT,
	cardNum		VARCHAR(100)	NOT NULL,
	securityCode	VARCHAR(100)	NOT NULL,
	cardType	VARCHAR(20)	NOT NULL,
	cardExp		DATE		NOT NULL,
	PRIMARY KEY(cardId)
);

CREATE TABLE Uses_Card(
	uid		INTEGER,
	cardId		INTEGER,
	PRIMARY KEY(uid, cardId),
	FOREIGN KEY(uid) REFERENCES Users(uid)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	FOREIGN KEY(cardId) REFERENCES CreditCards(cardId)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

CREATE TABLE Transactions(
	transactionId	INTEGER		NOT NULL AUTO_INCREMENT,
	sellerId	INTEGER,
	uid		INTEGER,
	itemId		INTEGER,
	revenue		DEC(10,2),
	timestamp	DATETIME,
	PRIMARY KEY(transactionId),
	FOREIGN KEY(sellerId) REFERENCES Users(uid)
		ON DELETE NO ACTION,
	FOREIGN KEY(uid) REFERENCES Users(uid)
		ON DELETE NO ACTION,
	FOREIGN KEY(itemId) REFERENCES Items(itemId)
		ON DELETE NO ACTION
);

CREATE TABLE Ratings(
	ratingId	INTEGER		NOT NULL AUTO_INCREMENT,
	raterId		INTEGER,
	itemId		INTEGER,
	rating		INTEGER		NOT NULL,
	commentText	VARCHAR(300)	NOT NULL,
	PRIMARY KEY(ratingId),
	FOREIGN KEY (raterId) REFERENCES Users(uid),
	FOREIGN KEY (itemId) REFERENCES Items(itemId)
);

CREATE TABLE Was_Rated(
	sellerId	INTEGER,
	ratingId	INTEGER,
	PRIMARY KEY(sellerId, ratingId),
	FOREIGN KEY(sellerId) REFERENCES Sellers(sellerId)
		ON DELETE NO ACTION,
	FOREIGN KEY(ratingId) REFERENCES Ratings(ratingId)
		ON DELETE NO ACTION
);
