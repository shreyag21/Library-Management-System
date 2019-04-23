create database library;
use library;

create table if not exists user_info(
	person_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(20) NOT NULL,
	last_name varchar(20),
	entry_number varchar(20),
	email varchar(20),
	total_fine int,
	is_admin int,
	primary key(person_id)
);

create table if not exists authenticate(
	person_id int,
	user_name varchar(20),
	password varchar(20),
	foreign key (person_id) REFERENCES user_info(person_id) ON DELETE CASCADE
);

create table if not exists book_info(
	book_id int AUTO_INCREMENT NOT NULL,
	book_name varchar(250),
	quantity int,
	is_sem int,
	is_reference int,
	ISBN varchar(20),
	book_description text,
	primary key(book_id)
);

create table if not exists category_info(
	category_id int NOT NULL AUTO_INCREMENT,
	category_name varchar(50),
	primary key(category_id) 
);

create table if not exists book_category(
	book_id int,
	category_id int,
	foreign key (book_id) REFERENCES book_info(book_id) ON DELETE CASCADE,
	foreign key (category_id) REFERENCES category_info(category_id) ON DELETE CASCADE
);

create table if not exists author(
	author_id int NOT NULL AUTO_INCREMENT,
	author_name varchar(100),
	primary key(author_id)
);

create table if not exists book_author(
	book_id int,
	author_id int,
	foreign key (book_id) REFERENCES book_info(book_id) ON DELETE CASCADE,
	foreign key (author_id) REFERENCES author(author_id) ON DELETE CASCADE
);

create table if not exists user_books(
	person_id int,
	book_id int,
	fine int,
	due_date date,
	date_return date,
	date_withdrawn date,
	foreign key (person_id) REFERENCES user_info(person_id) ON DELETE CASCADE,
	foreign key (book_id) REFERENCES book_info(book_id) ON DELETE CASCADE
);