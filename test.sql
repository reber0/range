use test;

create table user(
id int not null auto_increment primary key,
username varchar(20) not null,
password varchar(32) not null
);

create table msg(
id int not null auto_increment primary key,
name varchar(30) not null,
content varchar(1024) not null
);

insert into user(username,password) values('xiaoming',password('123456'));
insert into user(username,password) values('xiaoliu',password('654321'));

insert into msg(name,content) values('xiaoming','hello world.');
insert into msg(name,content) values('xiaoming','I have a dog.');
insert into msg(name,content) values('xiaoliu','how are you.');


