/*
Marketing Consultant Table:
TO DO:
- check which columns should not be null
Field Description:
- 
*/

CREATE TABLE Thutong.Marketing.MarketingConsultant
(MarketingID INT NOT NULL PRIMARY KEY,
FirstName VARCHAR(50) NULL,
LastName VARCHAR(50) NULL,
Occupation VARCHAR(50) NULL,
Email VARCHAR(50) NULL,
Contact VARCHAR(20) NULL,
ProfilePicture VARCHAR(100) NULL,
Password CHAR(32) NULL,
UserID INT NULL
CONSTRAINT fk_user2 FOREIGN KEY (UserID) REFERENCES People.[User] (UserID),
AddressID INT NULL
CONSTRAINT fk_address2 FOREIGN KEY (AddressID) REFERENCES Location.[Address] (AddressID))
GO