CREATE DATABASE users_db;


CREATE TABLE product(
    id int not null primary key auto_increment,
    name varchar(100) not null default 'messanger_bag',
    price decimal not null default '675'
);

CREATE TABLE users(
    id int not null primary key auto_increment,
    type varchar(100) not null default 'Admin',
    first_name varchar(100) not null default '',
    surname varchar(100) not null default '',
    is_online boolean not null default true,
    email varchar(100) not null default 'example@gmail.com',
    password varchar(256) not null

);

CREATE TABLE  user_log(
    id int not null primary key auto_increment,
    time TIMESTAMP default CURRENT_TIMESTAMP,
    operations varchar(200) default '',
    user_id FOREIGN KEY (id) REFERENCES users(id)
);


INSERT INTO product (name, price) VALUES
   ('messanger_bag',675 ),
   ('shoulder_bag', 475),
   ('sling_bag',675);
   ('hobo_bag',675);
   ('stachel_bag',475);
   ('tote_bag',675);
