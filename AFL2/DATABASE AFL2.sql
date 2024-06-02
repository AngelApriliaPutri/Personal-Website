drop database if exists afl2web;
CREATE DATABASE afl2web;
use afl2web;

drop table if exists profileme;
CREATE TABLE profileme (
    birthday DATE,
    instagram VARCHAR(255),
    phone VARCHAR(20),
    city VARCHAR(100),
    age INT,
    email VARCHAR(255),
    hobby VARCHAR(255)
);

INSERT INTO profileme (birthday, instagram, phone, city, age, email, hobby) VALUES ('2004-04-04', '@angelzyen', '+62 852 4927 3768', 'Surabaya, Indonesia', 20, 'aaprilia01@student.ciputra.ac.id', 'Travelling');

