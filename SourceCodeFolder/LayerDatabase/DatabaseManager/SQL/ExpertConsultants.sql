/*
Expert Consultant Table:
TO DO:
- check which columns should not be null
Field Description:
- 
*/

CREATE TABLE Thutong.People.ExpertConsultant
(ExpertID INT NOT NULL PRIMARY KEY,
FirstName VARCHAR(50) NULL,
LastName VARCHAR(50) NULL,
Occupation VARCHAR(50) NULL,
Email VARCHAR(50) NULL,
ProfilePicture VARCHAR(100) NULL,
Contact VARCHAR(20) NULL,
Password CHAR(32) NULL,
Description VARCHAR(MAX) NULL,
UserID INT NULL
CONSTRAINT fk_user FOREIGN KEY (UserID) REFERENCES People.[User] (UserID),
AddressID INT NULL
CONSTRAINT fk_address FOREIGN KEY (AddressID) REFERENCES Location.[Address] (AddressID))
GO