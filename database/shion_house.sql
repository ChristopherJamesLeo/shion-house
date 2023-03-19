CREATE DATABASE shion_house;

CREATE TABLE IF NOT EXISTS products (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100) NOT NULL DEFAULT "Product Name",
    type CHAR(100) NOT NULL DEFAULT "type",
    price DOUBLE(5,2) ,
    img BLOB NOT NULL ,
    create_at TIMESTAMP DEFAULT NOW() ,
    update_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
)

INSERT INTO products(name,type,price,img) VALUES
("Hoddie","cloths",32,"arrival1.png.webp"),
("Maphala","assecories",12,"arrival2.png.webp"),
("Shirt","Clothes",23,"arrival3.png.webp"),
("Blue Shirt","Clothes",34,"arrival4.png.webp"),
("Garwon","Girl Cloth",10,"arrival5.png.webp"),
("Glasses","assecories",50,"arrival6.png.webp"),
("White Pin","Clothes",20,"arrival7.png.webp"),
("Addidas","Shoe",60,"arrival8.png.webp");

CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role CHAR(100) NOT NULL,
    img BLOB NOT NULL,
    address VARCHAR(255) NULL,
    contactno VARCHAR(255) NOT NULL DEFAULT "123456789",
    create_at TIMESTAMP DEFAULT NOW()
)
INSERT INTO users (name,email,password,role,img,address,contactno) VALUES
("james","james@gmail.com","11111","1","user2.jpg","sarilanka","0912312422"),
("vivian","vivian@gmail.com","22222","0","agent-2.jpg","singapore","09872868342");


CREATE TABLE IF NOT EXISTS messages(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message LONGTEXT NOT NULL 
)


