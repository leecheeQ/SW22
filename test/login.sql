set names utf8;
#如果存在，丢弃数据库
drop database if exists login;
create database login charset=utf8;
#进入数据库
use login;
#创建数据表
create table laptop(
  id int primary key auto_increment,
  calculationHistory varchar(40) unique,  
);