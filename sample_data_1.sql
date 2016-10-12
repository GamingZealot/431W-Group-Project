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
INSERT INTO Movies (title, year, synopsis) VALUES ("Sunset Boulevard", 1950, "A hack screenwriter writes a screenplay for a former silent-film star who has faded into Hollywood obscurity.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Great Dictator", 1940, "Dictator Adenoid Hynkel tries to expand his empire while a poor Jewish barber tries to avoid persecution from Hynkel's regime.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Lives of Others", 2006, "In 1984 East Berlin, an agent of the secret police, conducting surveillance on a writer and his lover, finds himself becoming increasingly absorbed by their lives.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Cinema Paradiso", 1988, "A filmmaker recalls his childhood, when he fell in love with the movies at his village's theater and formed a deep friendship with the theater's projectionist.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Paths of Glory", 1957, "After refusing to attack an enemy position, a general accuses the soldiers of cowardice and their commanding officer must defend them.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Django Unchained", 2012, "With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Shining", 1980, "A family heads to an isolated hotel for the winter where an evil and spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from the past and of the future.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Grave of the Fireflies", 1988, "A young boy and his little sister struggle to survive in Japan during World War II.");
INSERT INTO Movies (title, year, synopsis) VALUES ("WALL·E", 2008, "In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Dark Knight Rises", 2012, "Eight years after the Joker's reign of anarchy, the Dark Knight, with the help of the enigmatic Catwoman, is forced from his imposed exile to save Gotham City, now on the edge of total annihilation, from the brutal guerrilla terrorist Bane.");
INSERT INTO Movies (title, year, synopsis) VALUES ("American Beauty", 1999, "A sexually frustrated suburban father has a mid-life crisis after becoming infatuated with his daughter's best friend.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Aliens", 1986, "The moon from Alien (1979) has been colonized, but contact is lost. This time, the rescue team has impressive firepower, but will it be enough?");
INSERT INTO Movies (title, year, synopsis) VALUES ("Princess Mononoke", 1997, "On a journey to find the cure for a Tatarigami's curse, Ashitaka finds himself in the middle of a war between the forest gods and Tatara, a mining colony. In this quest he also meets San, the Mononoke Hime.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Oldboy", 2003, "After being kidnapped and imprisoned for fifteen years, Oh Dae-Su is released, only to find that he must find his captor in five days.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Once Upon a Time in America", 1984, "A former Prohibition-era Jewish gangster returns to the Lower East Side of Manhattan over thirty years later, where he once again must confront the ghosts and regrets of his old life.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Citizen Kane", 1941, "Following the death of a publishing tycoon, news reporters scramble to discover the meaning of his final utterance.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Das Boot", 1981, "The claustrophobic world of a WWII German U-boat; boredom, filth, and sheer terror.");
INSERT INTO Movies (title, year, synopsis) VALUES ("North by Northwest", 1959, "A hapless New York advertising executive is mistaken for a government agent by a group of foreign spies, and is pursued across the country while he looks for a way to survive.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Witness for the Prosecution", 1957, "A veteran British barrister must defend his client in a murder trial that has surprise after surprise.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Star Wars: Episode VI - Return of the Jedi", 1983, "After rescuing Han Solo from the palace of Jabba the Hutt, the rebels attempt to destroy the second Death Star, while Luke struggles to make Vader return from the dark side of the Force.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Reservoir Dogs", 1992, "After a simple jewelry heist goes terribly wrong, the surviving criminals begin to suspect that one of them is a police informant.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Braveheart", 1995, "When his secret bride is executed for assaulting an English soldier who tried to rape her, William Wallace begins a revolt against King Edward I of England.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Requiem for a Dream", 2000, "The drug-induced utopias of four Coney Island people are shattered when their addictions run deep.");
INSERT INTO Movies (title, year, synopsis) VALUES ("To Kill a Mockingbird", 1962, "Atticus Finch, a lawyer in the Depression-era South, defends a black man against an undeserved rape charge, and his children against prejudice.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Toy Story 3", 2010, "The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it's up to Woody to convince the other toys that they weren't abandoned and to return home.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Shawshank Redemption", 1994, "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Godfather", 1972, "The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Godfather: Part II", 1974, "The early life and career of Vito Corleone in 1920s New York is portrayed while his son, Michael, expands and tightens his grip on his crime syndicate stretching from Lake Tahoe, Nevada to pre-revolution 1958 Cuba.");
INSERT INTO Movies (title, year, synopsis) VALUES ("The Dark Knight", 2008, "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.");
INSERT INTO Movies (title, year, synopsis) VALUES ("12 Angry Men", 1957, "A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.");
INSERT INTO Movies (title, year, synopsis) VALUES ("Schindler's List", 1993, "In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazi Germans.");
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

/* Items */
INSERT INTO Items (location, description, format) VALUES ("California", "DVD copy of the movie in good condition", "DVD");

/* Sellers */
INSERT INTO Sellers (companyName) VALUES ("");

/* Is_Seller */
INSERT INTO Is_Seller (uid, sellerId) VALUES (1, 1);

/* Sold_By */
INSERT INTO Sold_By (itemId, sellerId) VALUES (1, 1);

/* Is_Movie */
INSERT INTO Is_Movie (itemId, movieId) VALUES (1, 1);

/* SaleItems */
INSERT INTO SaleItems (stock, price, itemId) VALUES (2, 10.50, 1);

/* Auctionitems */
INSERT INTO AuctionItems (endTime, currentBid, itemId) VALUES ('2016-10-5 00:00:00', 5.00, 1);

/* Ratings */
INSERT INTO Ratings (raterId, itemId, rating, commentText) VALUES (1, 1, 2, "This guy was lame.");

/* Was_Rated */
INSERT INTO Was_Rated (sellerId, ratingId) VALUES (1, 1);
