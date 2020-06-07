create schema cake;
USE cake;

create table user(
id int auto_increment primary key,
name VARCHAR(255) NOT NULL,
sex int NOT NULL,
phone_number VARCHAR(255) not null,
email VARCHAR(255) NOT NULL unique
);

INSERT INTO user (name, sex, phone_number, email) VALUES
('nanami sasaki', 1, '090-1234-5678', 'test@test.com');
