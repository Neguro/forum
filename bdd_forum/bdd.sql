drop database IF EXISTS Forum;
create database Forum;
use Forum

create table roleUser (
    id_r integer not null primary key auto_increment,
    nom_r varchar(10)
);

create table User (
    id_u integer not null primary key auto_increment,
    nom varchar(25) not null,
    prenom varchar(25) not null,
    username varchar(20) not null,
    email varchar(50) unique,
    mdp varchar(50) not null,
    id_r integer not null,
    constraint fk_role foreign key (id_r) references roleUser(id_r)
);

create table Categorie (
    id_c integer not null primary key auto_increment,
    libelle varchar(50)
);

create table Post (
    id_p integer not null primary key auto_increment,
    titre varchar(100) not null,
    contenu varchar(500) not null,
    date_crea Date not null,
    nbr_like integer,
    nbr_dislike integer,
    id_u integer not null,
    id_c integer not null,
    constraint fk_user_post foreign key (id_u) references User(id_u),
    constraint fk_categ foreign key (id_c) references Categorie(id_c)
);

create table Commentaire (
    id_com integer not null primary key auto_increment,
    contenu varchar(500) not null,
    date_crea Date not null,
    nbr_like integer,
    nbr_dislike integer,
    id_u integer not null,
    id_p integer not null,
    constraint fk_user_com foreign key (id_u) references User(id_u),
    constraint fk_post foreign key (id_p) references Post(id_p)
);

insert into roleUser values (1, 'admin');
insert into roleUser values (2, 'user');

insert into user values (1, 'admin',     'admin',   'admin',  'admin@admin.com', 'admin', 1);
insert into user values (2, 'FANG',      'Jingyao', 'FJY',    'fangjingyao8@gmail.com', '20010619abc', 2);
insert into user values (3, 'AHMED ALI', 'Nassim',  'Nassim', 'nassim.ahmedali@gmail.com', '123456', 2);

insert into Categorie values (1, 'Informatique');
insert into Categorie values (2, 'Biologie');
insert into Categorie values (3, 'Phisque');
insert into Categorie values (4, 'Chemie');

insert into Post values (1, 'PHP', 'On a un projet en PHP, on travaille en groupe', CURDATE(), 0, 0, 2, 1);
insert into Post values (2, 'Java', 'On a un projet en Java, on travaille en groupe', CURDATE(), 0, 0, 3, 1);
insert into Post values (3, 'Théorie de la relativité', 'On a un projet en relativité, on travaille en groupe', CURDATE(), 0, 0, 2, 3);

insert into Commentaire values (1, "J'aime PHP", CURDATE(), 0, 0, 3, 1);
insert into Commentaire values (2, "J'aime Java", CURDATE(), 0, 0, 2, 2);
Insert into Commentaire values (3, "J'aime phisque", CURDATE(), 0, 0, 2, 3);