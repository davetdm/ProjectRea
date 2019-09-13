CREATE DATABASE projectrea_db;

CREATE TABLE users(
    id int not null primary key auto_increment,
    type varchar(16) not null default 'Admin',
    first_name varchar(128) not null default '',
    surname varchar(128) not null default '',
    is_online boolean not null default true,
    email varchar(256) not null default 'example@gmail.com',
    password varchar(256) not null default '',
    phone_number varchar(16) not null default ''
);

CREATE TABLE  user_log(
    id int not null primary key auto_increment,
    time TIMESTAMP default CURRENT_TIMESTAMP,
    operations varchar(256) default '',
    user_id int not null REFERENCES users(id)
);

CREATE TABLE orders(
    id int not null primary key auto_increment,
    sub_total varchar(64) not null default '',
    vat varchar(64) not null default '',
    total_amount varchar(64) not null default '',
    order_date TIMESTAMP not null default current_timestamp,
    user_id int not null REFERENCES users(id)
);

CREATE TABLE order_item(
    id int not null primary key auto_increment,
    quantity int not null default 1,
    name varchar(128) not null default 'Message Bag',
    price varchar(64) not null default '',
    color varchar(64) not null default '',
    picture varchar(256) not null default ''
);

CREATE TABLE order_status(
    id int not null primary key auto_increment,
    status varchar(16) not null default '', -- Pending, InTransit, Delivered
    status_date TIMESTAMP default current_timestamp,
    order_id int not null REFERENCES orders(id)
);

CREATE TABLE payment(
    id int not null primary key auto_increment,
    amount varchar(64) not null default '',
    pay_method varchar(16) not null default '',
    pay_date TIMESTAMP default current_timestamp,
    order_id int not null REFERENCES orders(id)
);

CREATE TABLE product(
    id int not null primary key auto_increment,
    name varchar(128) not null default 'Message Bag',
    price varchar(64) not null default '',
    color varchar(64) not null default '',
    picture varchar(256) not null default ''
);


INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'messanger_bag', 675),
(2, 'shoulder_bag', 475),
(3, 'sling_bag', 675),
(4, 'hobo_bag',  675),
(5, 'stachel_bag',  475),
(6, 'tote_bag',  675);
