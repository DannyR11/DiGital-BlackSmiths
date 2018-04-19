CREATE DATABASE Thutong
ON
PRIMARY ( NAME = Thutong_dat,
	FILENAME = 'C:\Thutong Data\Thutongdat.mdf',
SIZE = 10MB,
MAXSIZE = 50MB,
FILEGROWTH=5%)
GO

USE Thutong;
GO

CREATE SCHEMA Marketing AUTHORIZATION DBO
GO

CREATE SCHEMA People AUTHORIZATION DBO
GO

CREATE SCHEMA Academic AUTHORIZATION DBO
GO

CREATE SCHEMA Location AUTHORIZATION DBO
GO

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

/*
Expert Subjects Table: (Mapping Table)
Unsure about how to depict the primary key for this 
*/

CREATE TABLE Thutong.Academic.ExpertSubjects
(ExpertID INT NULL
CONSTRAINT fk_expert FOREIGN KEY (ExpertID) REFERENCES People.[ExpertConsultant] (ExpertID),
SubjectID INT NULL
CONSTRAINT fk_subject FOREIGN KEY (SubjectID) REFERENCES Academic.[Subject] (SubjectID),
CONSTRAINT PRIMARY KEY (ExpertID,SubjectID))
GO

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

/*
User Table:
TO DO:
- address the permission field, how are we storing the permissions exactly
This table does not seem useful, if we intend to see the user type to determine 
the access permisions then we can just query each of the user tables looking for
the type of the user and the "permissions" struct can then exist only there.

*/

/*CREATE TABLE Thutong.People.User
(UserID INT NOT NULL PRIMARY KEY,
)
GO*/

/*
Quiz Table:
TO DO:
- resolve the actual structure of the struct: questions and solutions,
or rather, make tables for each these purposes.
*/

CREATE TABLE Thutong.Academic.Quiz
(QuizID INT NOT NULL PRIMARY KEY,
TopicID INT NULL
CONSTRAINT fk_topic FOREIGN KEY (TopicID) REFERENCES Academic.[Topic] (TopicID),
QuestionID INT NULL
CONSTRAINT fk_question FOREIGN KEY (QuestionID) REFERENCES Academic.[Question] (QuestionID))
GO

/*
Question Table:
TO DO:
- investigate where 100 characters for the file links would be sufficient, especially for growth
*/

CREATE TABLE Thutong.Academic.Question
(QuestionID INT NOT NULL PRIMARY KEY,
Question VARCHAR(MAX) NULL,
Media VARCHAR(100) NULL,
Type VARCHAR(50) NULL)
GO

/*
Solution Table:

*/

CREATE TABLE Thutong.Academic.Solution
(SolutionID INT NOT NULL PRIMARY KEY,
Solution VARCHAR(MAX) NULL,
Media VARCHAR(50) NULL)
GO

/*
Marks Table
- TO DO:

*/

CREATE TABLE Thutong.Academic.Marks
(Mark INT NOT NUll,
QuizID INT NULL
CONSTRAINT fk_quiz FOREIGN KEY (QuizID) REFERENCES Academic.[Quiz] (QuizID),
StudentID INT NULL
CONSTRAINT fk_student FOREIGN KEY (StudentID) REFERENCES Academic.[Student] (StudentID))
GO

/*
Academic Content Table:
- TO DO:
- change the type field and make table so each type of document and a media schema as
well i.e. document, image/diagram, video, audio
*/

CREATE TABLE Thutong.Academic.AcademicContent
(ContentID INT NOT NULL PRIMARY KEY,
Type VARCHAR(50) NULL,
Name VARCHAR(50) NULL,
Description VARCHAR(MAX) NULL,
DateCreated DATETIME2(7) NOT NULL,
TopicID INT NULL
CONSTRAINT fk_topic2 FOREIGN KEY (TopicID) REFERENCES Academic.[Topic] (TopicID))
GO

/*
ICT Fact Table:
- what is the content field exactly?
ans: pictures, text describing that content? Get and example of the top before opening a text editor
*/

CREATE TABLE Thutong.Academic.ICTFact
(FactID INT NOT NULL PRIMARY KEY,
Content VARCHAR(50) NULL,
Description VARCHAR(MAX) NULL)
GO

/*
ICT Progress Table:
- investigate how to handle combined keys in the table
*/

CREATE TABLE Thutong.Academic.ICTProgress
(Viewed BOOLEAN NULL,
FactID INT NULL
CONSTRAINT fk_fact FOREIGN KEY (FactID) REFERENCES Academic.[ICTFact] (FactID),
StudentID INT NULL
CONSTRAINT fk_student2 FOREIGN KEY (StudentID) REFERENCES Academic.[Student] (StudentID))
GO

/*
Subject Table:

*/

CREATE TABLE Thutong.Academic.Subject
(SubjectID INT NOT NULL PRIMARY KEY,
Grade INT NULL,
Description VARCHAR(MAX) NULL)
GO

/*
Advertiser Table:

*/

CREATE TABLE Thutong.Marketing.Advertiser
(AdvertiserID INT NOT NULL PRIMARY KEY,
Email VARCHAR(50) NULL,
Name VARCHAR(50) NULL,
Contant VARCHAR(20) NULL,
AddressID )
GO