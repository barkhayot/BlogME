create table blog (
    num int not null auto_increment,
    author_id(100) not null,
    subject char(200) not null,
    content text(1000) not null,
    pic_ad char(255),
    regist_day char(20),
    primary key(num)
);
