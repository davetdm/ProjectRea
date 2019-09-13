CREATE DATABASE users_db;

CREATE TABLE orders(
   id int not null primary key auto increment,
   total_cost decimal not null default 0.0,
   order_date TIMESTAMP not null default current_timestamp,
   user_id int not null REFERENCES users(id)
   );

CREATE TABLE order_item(
   id int not null primary key auto increment,
   quantity int(11) default 1,
   order_date TIMESTAMP default current_timestamp,
   prod_id int not null REFERENCES product(id)
);

CREATE TABLE order_status(
   id int not null primary key auto increment,
   status Boolean,
   status_date TIMESTAMP default current_timestamp,
   order_id int not null REFERENCES orders(id)
);

CREATE TABLE payment(
   id int not null primary key auto increment,
   amount decimal default 0.0,
   pay_method varchar(225),
   pay_date TIMESTAMP default current_timestamp,
   user_id int not null REFERENCES users(id),
   order_id int not null REFERENCES orders(id)
);

CREATE TABLE product(
   id int not null primary key auto increment,
   name varchar(100) not null default 'messanger_bag',
   price decimal not null default '675'
);

CREATE TABLE users(
   id int not null primary key auto increment,
   type varchar(100) not null default 'Admin',
   first_name varchar(100) not null default '',
   surname varchar(100) not null default '',
   is_online boolean not null default true,
   email varchar(100) not null default 'example@gmail.com',
   password varchar(256) not null
);

CREATE TABLE  user_log(
   id int not null primary key auto increment,
   time TIMESTAMP default current_timestamp,
   operations varchar(200) default '',
   user_id int not null REFERENCES users(id)
);

INSERT INTO product (name, price) VALUES
 ('messanger_bag',675 ),
 ('shoulder_bag', 475),
 ('sling_bag',675),
 ('hobo_bag',675),
 ('stachel_bag',475),
 ('tote_bag',675);