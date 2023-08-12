
-- CREATE DATABASE services

CREATE TABLE providers
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    contact varchar(20) NOT NULL,
    descr varchar(1000) NOT NULL,
    adder1 varchar(255) NOT NULL,
    adder2 varchar(255) NOT NULL,
    city varchar(50) NOT NULL,
    password varchar(255) NOT NULL,
    photo varchar(255) NOT NULL,
    profession varchar(255) NOT NULL,
    price int NOT NULL,
    gender varchar(10) NOT NULL
);

CREATE TABLE bookings
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    provider_id integer unsigned NOT NULL,
    fname varchar(255) NOT NULL,
    lname varchar(255) NOT NULL,
    contact varchar(20) NOT NULL,
    adder varchar(255) NOT NULL,
    date date NOT NULL,
    payment varchar(30) NOT NULL,
    queries varchar(255) NOT NULL,
    enddate date NOT NULL,
    dateTime varchar(30) NOT NULL,
    mpesaTransactionID varchar(30) NOT NULL
);

CREATE TABLE reviews
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    photo varchar(255) NOT NULL,
    profession varchar(255) NOT NULL,
    price int NOT NULL,
    rating integer  NULL,
    review varchar(255)  NULL
);