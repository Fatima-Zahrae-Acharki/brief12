CREATE TABLE employee (
    Registration_number char(4) number PRIMARY KEY NOT NULL,
    Last_name varchar(30) not null,
    First_name varchar(30) not null,
    Birth_date date() not null,
    Department varchar(30) not null,
    Salary decimal() not null,
    Occupation varchar(30) not null,
    Picture varchar(2000) not null
    
);
INSERT INTO employee (Registration_number, Last_name, First_name, Birth_date, Salary, Department, Occupation, Picture) 
VALUES ('1123' , 'Shoto' , 'Todoroki' , '14/03/2001' , 39999 , 'administration' , 'chef', "<img src = 'url(brief12/pic/todoroki.jpg)'>" );