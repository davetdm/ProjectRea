CREATE DATABASE users_db;

CREATE TABLE orders(
    id int not null primary key auto_increment,
    total_cost decimal(10.2) not null default 0.0,
    order_date TIMESTAMP not null default current_timestamp,
    user_id not null FOREIGN KEY REFERENCES users(id)
;

CREATE TABLE order_item(
    id int not null primary key auto_increment,
    quantity int(11) default 1,
    order_date TIMESTAMP default current_timestamp,
    prod_id not null FOREIGN KEY REFERENCES product(id)
);

CREATE TABLE order_status(
    id int not null primary key auto_increment,
    status Boolean,
    status_date TIMESTAMP default current_timestamp,
    order_id not null FOREIGN KEY REFERENCES orders(id)
);

CREATE TABLE payment(
    id int not null primary key auto_increment,
    amount decimal(10.2) default 0.0,
    pay_method varchar(225),
    pay_date TIMESTAMP default current_timestamp,
    user_id not null FOREIGN KEY REFERENCES users(id),
    order_id not null FOREIGN KEY REFERENCES orders(id)
);

