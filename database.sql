
---Database
CREATE Database marks;


--Tabel Structure for student's mark
CREATE TABLE std_marks (
 id int(5) NOT NULL PRIMARY KEY,
 name varchar(60) NOT NULL,
 class tinytext,
 mark int(5)   
);