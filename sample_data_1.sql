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
INSERT INTO Movies (title, year, synopsis) VALUES ("The Shawshank Redemption", 1994, "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Godfather", 1972, "The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Godfather: Part II", 1974, "The early life and career of Vito Corleone in 1920s New York is portrayed while his son, Michael, expands and tightens his grip on his crime syndicate stretching from Lake Tahoe, Nevada to pre-revolution 1958 Cuba.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Dark Knight", 2008, "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.");
INSERT INTO Movies (title, year, synopsis) VALUES ("12 Angry Men", 1957, "A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Schindler's List", 1993, "In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazi Germans.")
INSERT INTO Movies (title, year, synopsis) VALUES ("Pulp Fiction", 1994, "The lives of two mob hit men, a boxer, a gangster's wife, and a pair of diner bandits intertwine in four tales of violence and redemption.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Lord of the Rings: The Return of the King", 2003, "Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Good, the Bad and the Ugly", 1966, "A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Fight Club", 1999, "An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soap maker, forming an underground fight club that evolves into something much, much more.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Lord of the Rings: The Fellowship of the Ring", 2001, "A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle Earth from the Dark Lord Sauron.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Star Wars: Episode V - The Empire Strikes Back", 1980, "After the rebels have been brutally overpowered by the Empire on their newly established base, Luke Skywalker takes advanced Jedi training with Master Yoda, while his friends are pursued by Darth Vader as part of his plan to capture Luke.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Forrest Gump", 1994, "Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Inception", 2010, "A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Lord of the Rings: The Two Towers", 2002, "While Frodo and Sam edge closer to Mordor with the help of the shifty Gollum, the divided fellowship makes a stand against Sauron's new ally, Saruman, and his hordes of Isengard.");
INSERT INTO Movies (title, year, synopsis) VALUES ("One Flew Over the Cuckoo's Nest", 1975, "A criminal pleads insanity after getting into trouble again and once in the mental institution rebels against the oppressive nurse and rallies up the scared patients.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Goodfellas", 1990, "Henry Hill and his friends work their way up through the mob hierarchy.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Matrix", 1990, "A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Seven Samurai", 1954, "A poor village under attack by bandits recruits seven unemployed samurai to help them defend themselves.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Star Wars: Episode IV - A New Hope", 1977, "Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a wookiee and two droids to save the galaxy from the Empire's world-destroying battle-station, while also attempting to rescue Princess Leia from the evil Darth Vader.");
INSERT INTO Movies (title, year, synopsis) VALUES ("City of God", 2002, "Two boys growing up in a violent neighborhood of Rio de Janeiro take different paths: one becomes a photographer, the other a drug dealer.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Se7en", 1995, "Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his modus operandi.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Silence of the Lambs", 1991, "A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.");
INSERT INTO Movies (title, year, synopsis) VALUES ("It's a Wonderful Life", 1946, "An angel helps a compassionate but despairingly frustrated businessman by showing what life would have been like if he never existed.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Usual Suspects", 1995, "A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which begin when five criminals meet at a seemingly random police lineup.");









