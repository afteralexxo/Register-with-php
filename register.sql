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
 ('Alex','itsalexog@gmailcom','@l3xOg01369'),
 ('Mika','mikasplidd2OULOOKcom', 'mikadredagg');

 SELECT * FROM customer;