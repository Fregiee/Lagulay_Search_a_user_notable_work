create table search_users_data(
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_specialization VARCHAR(255),
    experience VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(255),
    nationality VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (1, 'Security Analysis','10 years', 'Nikoletta', 'Dahlen', 'ndahlen0@pinterest.com', 'Female', 'Cree', '2024-07-10');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (2, 'Financial Analysis','4 years', 'Linn', 'Hamilton', 'lhamilton1@example.com', 'Female', 'American Indian', '2024-06-07');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (3, 'Senior Financial Analyst','5 years', 'Jacquetta', 'Coy', 'jcoy2@who.int', 'Female', 'Dominican (Dominican Republic)', '2024-09-05');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (4, 'Statistical Analysis','6 years', 'Minni', 'Boshers', 'mboshers3@jalbum.net', 'Female', 'Chippewa', '2024-02-06');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (5, 'Database Management','4 years', 'Maximo', 'Gracey', 'mgracey4@economist.com', 'Male', 'Uruguayan', '2024-02-10');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (6, 'Data Visualization','8 years', 'Any', 'Till', 'atill5@51.la', 'Male', 'Blackfeet', '2024-07-30');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (7, 'Business intelligence and strategy','5 years', 'Callida', 'Wiszniewski', 'cwiszniewski6@gmpg.org', 'Female', 'Samoan', '2024-01-02');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (8, 'Data Engineer', 'Lemuel','9 years', 'McBean', 'lmcbean7@theguardian.com', 'Male', 'Asian', '2024-07-27');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (9, 'Operations data analysis','4 years', 'Lemuel', 'Paling', 'lpaling8@theatlantic.com', 'Male', 'Yaqui', '2024-02-12');
insert into search_users_data (id, data_specialization, experience, first_name, last_name, email, gender, nationality, date_added) values (10, 'Database Architecture','6 years', 'Elicia', 'Bilverstone', 'ebilverstone9@com.com', 'Female', 'Shoshone', '2024-01-19');


