CREATE DATABASE users_db;

CREATE TABLE orders(
    id int not null primary key auto_increment,
    total_cost decimal not null default 0.0,
    order_date TIMESTAMP not null default current_timestamp,
    user_id int not null REFERENCES users(id)
);

CREATE TABLE order_item(
    id int not null primary key auto_increment,
    quantity int(11) default 1,
    order_date TIMESTAMP default current_timestamp,
    prod_id int not null REFERENCES product(id)
);

CREATE TABLE order_status(
    id int not null primary key auto_increment,
    status Boolean,
    status_date TIMESTAMP default current_timestamp,
    order_id int not null REFERENCES orders(id)
);

CREATE TABLE payment(
    id int not null primary key auto_increment,
    amount decimal default 0.0,
    pay_method varchar(225),
    pay_date TIMESTAMP default current_timestamp,
    user_id int not null REFERENCES users(id),
    order_id int not null REFERENCES orders(id)
);

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
    user_id int not null REFERENCES users(id)
);


INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'messanger_bag', 675),
(2, 'shoulder_bag', 475),
(3, 'sling_bag', 675),
(4, 'hobo_bag',  675),
(5, 'stachel_bag',  475),
(6, 'tote_bag',  675);
