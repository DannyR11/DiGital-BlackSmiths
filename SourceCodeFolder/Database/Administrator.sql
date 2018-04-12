/*
Administrator Table:

*/

CREATE TABLE Thutong.People.Administrator
(AdminID INT NOT NULL PRIMARY KEY,
FirstName VARCHAR(50) NULL,
LastName VARCHAR(50) NULL,
Email VARCHAR(50) NULL,
Password CHAR(32) NULL,
ProfilePicture VARCHAR(100) NULL,
Contact VARCHAR(20) NULL,
UserID INT NULL
CONSTRAINT fk_user4 FOREIGN KEY (UserID) REFERENCES People.[User] (UserID))
GO