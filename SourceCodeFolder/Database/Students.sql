/*
Student Table:

*/

CREATE TABLE Thutong.People.Student
(StudentID INT NOT NULL PRIMARY KEY,
FirstName VARCHAR(50) NULL,
LastName VARCHAR(50) NULL,
Email VARCHAR(50) NULL,
ProfilePicture VARCHAR(100) NULL,
Password CHAR(32) NULL,
Grade INT NULL,
UserID INT NULL
CONSTRAINT fk_user3 FOREIGN KEY (UserID) REFERENCES People.[User] (UserID))
GO
