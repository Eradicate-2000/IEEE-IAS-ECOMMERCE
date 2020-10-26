create database ecommerce;

use ecommerce;

create table product (
	img varchar2(200) primary key,
	prod_name varchar2(100),
	price varchar2(6)
);

create table cart (
	img varchar2(200) primary key,
	foreign key (img) references product(img)
);

create table loginsystem (
	username varchar2(25) primary key,
	password varchar2(20)
);

insert into product(img , prod_name , price )
	values ('assets/img/categori/product1.png','Green Dress with details','$40.00'),
	             ('assets/img/categori/product2.png','Green Dress with details','$40.00'),
	             ('assets/img/categori/product3.png','Green Dress with details','$40.00'),
	             ('assets/img/categori/product4.png','Green Dress with details','$40.00'),
	             ('assets/img/categori/product5.png','Green Dress with details','$40.00'),
	             ('assets/img/categori/product6.png','Green Dress with details','$40.00');