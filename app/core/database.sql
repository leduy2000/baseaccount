Drop database if exists baseaccount;
Create database baseaccount;
Use baseaccount;
CREATE TABLE User(
    ID int(11) AUTO_INCREMENT PRIMARY KEY,
    firstName text not null,
    lastName text not null,
    email varchar(255) unique not null,
    password varchar(255) not null,
    username varchar(255) unique not null,
    position varchar(255) null,
    avatar varchar(255) null,
    DOB Date null,
    address varchar(255) null,
    phoneNumber varchar(255) unique null,
    roleID int REFERENCES role(ID)
);

CREATE TABLE Role(
    ID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null
);