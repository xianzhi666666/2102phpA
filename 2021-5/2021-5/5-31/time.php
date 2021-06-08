<?php
// create table `users` (
//     `userid` int unsigned auto_increment primary key,
//     `username` varchar(64),
//     `email` varchar(64),
//     `mobile` char(11),
//     `password` varchar(64),
//     `account` int
// );
// create table `login_history` (
//     `id` int unsigned auto_increment primary key,
//     `uid` int,
//     `login_time` varchar(64),
//     `login_ip` varchar(24),
//     `ua` varchar(200)
// );
// alter table users add column `address` varchar(128) character set 'utf8' COLLATE 'utf8_general_ci';
聚合函数
● count()		// 返回记录行数
select count(uid) from users;
● avg()		// 计算列的平均值 ceil()向上取整  floor()向下取整
select avg(age) from users;
● max()		// 返回某列的最大值
select max(age) from users;
● min()		// 返回某列的最小值
select min(age) from users;
● sum()		// 计算某列的和
select sum(account) from users;


