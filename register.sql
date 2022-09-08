CREATE DATABASE registerphp;

USE registerphp;

CREATE TABLE customer (
     Id INT(10) NULL AUTO_INCREMENT , 
     Username VARCHAR(20) NULL , 
     Email VARCHAR(20) NULL, 
     Pass VARCHAR(20) NULL ,
     PRIMARY KEY(Id)
     );
     
INSERT INTO customer ( `Username` , `Email` , `Pass`)
 VALUES
 ('Charles','charli@yahoo.com','charin333');

 SELECT * FROM customer;