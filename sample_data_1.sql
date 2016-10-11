/* Users */
INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "john.doe@psu.edu", "c11083b4b0a7743af748c85d343dfee9fbb8b2576c05f3a7f0d626aadfc", "John Doe", "1 E. College Ave.", "State College", "Pennsylvania", "16801", "111-111-1111", 50);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "jane.doe@psu.edu", "630bf032efe4507f2c57b280995925a9", "Jane Doe", "2 E. College Ave.", "State College", "Pennsylvania", "16801", "111-111-2222", 48);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "chris.carney@psu.edu", "c11083b4b0a7743af748c85d343dfee9fbb8b2576c05f3a7f0d632b6aad", "Chris Carney", "3 E. College Ave.", "State College", "Pennsylvania", "16801", "111-111-3333", 21);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "pat.colville@psu.edu", "5206b8b8a996cf5320cb12ca91c7b790fba9f030408efe83ebb48dc3007bd", "Pat Colville", "4 E. College Ave.", "State College", "Pennsylvania", "16801", "111-111-4444", 21);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "charles.desanno@psu.edu", "e4ba5cbd251c98e6cd1c23f126a3b81d8d8328abc95387220952b3ef9f", "Charles De Sanno", "5 E. College Ave.", "State College", "Pennsylvania", "16801", "111-122-4444", 21);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "michael.norris@psu.edu", "d5ec75d5fe70d428685510fae36492d9", "Michael Norris", "6 E. College Ave.", "State College", "Pennsylvania", "16801", "111-122-4344", 21);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "nicholas.lysowski@psu.edu", "386f43fab5d096a7a66d67c8f213e5ec", "Nicholas Lysowski", "7 E. College Ave.", "State College", "Pennsylvania", "16801", "311-122-4344", 21);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "vince.landis@psu.edu", "2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e730433629", "Vince Landis", "8 E. College Ave.", "State College", "Pennsylvania", "16801", "341-122-4344", 21);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "Ryan.Smith@psu.edu", "2546f54dd30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824", "Ryan Smith", "9 E. College Ave.", "State College", "Pennsylvania", "16801", "371-152-4344", 45);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "Kelly.Smith@psu.edu", "a49670c3c18b9e079b9cfaf51634f563dc8ae3070db2c4a8544305df1b6", "Kelly Smith", "10 E. College Ave.", "State College", "Pennsylvania", "16801", "373-152-4344", 43);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "Tim.smith@psu.edu", "d1d3ec2e6f20fd420d50e2642992841d8338a314b8ea157c9e18477aaef226ab", "Tim Smith", "11 E. College Ave.", "State College", "Pennsylvania", "16801", "353-102-4344", 30);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "tom.johnson@psu.edu", "d1d3ec2e6f20fd420d50e2642992841d8338a314b8ea157c9e18477aaef", "tom johnson", "12 E. College Ave.", "State College", "Pennsylvania", "16801", "343-102-4348", 34);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "linda.johnson@psu.edu", "9e209040c863f84a31e719795b2577523954739fe5ed3b58a75cff21270", "linda johnson", "12 E. College Ave.", "State College", "Pennsylvania", "16801", "400-102-4348", 35);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "abe.lincoln@psu.edu", "c0e81794384491161f1777c232bc6bd9ec38f616560b120fda8e90f383", "abraham lincoln", "13 E. College Ave.", "State College", "Pennsylvania", "16801", "500-102-4348", 54);

INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( "tyler.jones@psu.edu", "f1777c232bc6bd9ec38f616560b120fda8e90f3838535", "Tyler Jones", "14 E. College Ave.", "State College", "Pennsylvania", "16801", "450-102-4348", 32);

/* Categories */
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (1, NULL, "All");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (2, 1, "Movies");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (3, 1, "TV Shows");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (4, 1, "Award Winners");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (5, 1, "Genres");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (6, 1, "Studios");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (7, 1, "Years");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (8, 1, "Actor");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (9, 1, "Actress");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (10, 1, "Medium");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (11, 1, "Editor Choice");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (12, 2, "Top Sellers");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (13, 2, "Top Rated");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (14, 2, "New Arrivals");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (15, 3, "Top Sellers");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (16, 3, "Top Rated");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (17, 3, "New Arrivals");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (18, 4, "Academy Award");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (19, 4, "Grammy");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (20, 4, "Emmy");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (21, 4, "Tony");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (22, 5, "Comedy");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (23, 5, "Horror");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (24, 5, "Adventure");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (25, 5, "Animated");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (26, 5, "Children");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (27, 5, "Documentary");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (28, 5, "Drama");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (29, 5, "Romance");
INSERT INTO Categories (categoryId, parentId, categoryName) VALUES (30, 5, "Sc-Fi");

/* Movies to sell */
INSERT INTO Movies (title, year, synopsis) VALUES ("Aliens", 1979, "After a space merchant vessel perceives an unknown transmission as distress call, their landing on the source moon finds one of the crew attacked by a mysterious lifeform. Continuing their journey back to Earth with the attacked crew having recovered and the critter deceased, they soon realize that its life cycle has merely begun.");
