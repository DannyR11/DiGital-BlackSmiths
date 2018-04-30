CREATE TABLE User (
UserID int(8) unsigned not null auto_increment primary key,
Permission int(1) unsigned not null
);

CREATE TABLE Address (
AddressID int(8) unsigned not null auto_increment primary key,
FirstDetail text null,
StreetName varchar(50) not null,
Province varchar(50) not null,
AreaCode varchar(10) not null,
Country varchar(50) not null
);

CREATE TABLE ExpertConsultant (
ExpertID int(8) unsigned not null auto_increment primary key,
FirstName varchar(50) null,
LastName varchar(50) null,
Occupation varchar(50) null,
Email varchar(50) null,
ProfilePicture varchar(100) null,
Contact varchar(20) null,
Password char(32) null,
Description text null,
UserID int(8) unsigned null,
constraint fk_user foreign key (UserID) references User(UserID),
AddressID int(8) unsigned null,
constraint fk_address foreign key (AddressID) references Address(AddressID)
);

/*
Subject Table:

*/

CREATE TABLE Subject 
(SubjectID int(8) unsigned not null auto_increment primary key,
Grade int null,
Description text null
);


/*
Expert Subjects Table: (Mapping Table)
Unsure about how to depict the primary key for this 
*/

CREATE TABLE ExpertSubjects (
ExpertID int(8) unsigned null,
constraint fk_expert foreign key (ExpertID) references ExpertConsultant(ExpertID),
SubjectID int(8) unsigned null,
constraint fk_subject foreign key (SubjectID) references Subject(SubjectID),
constraint primary key (ExpertID,SubjectID)
);


/*
Marketing Consultant Table:
TO DO:
- check which columns should not be null
Field Description:
- 
*/

CREATE TABLE MarketingConsultant
(MarketingID int(8) unsigned not null auto_increment primary key,
FirstName varchar(50) null,
LastName varchar(50) null,
Occupation varchar(50) null,
Email varchar(50) null,
Contact varchar(20) null,
ProfilePicture varchar(100) null,
Password char(32) null,
UserID int(8) unsigned null,
constraint fk_user2 foreign key (UserID) references User(UserID),
AddressID int(8) unsigned null,
constraint fk_address2 foreign key (AddressID) references Address(AddressID)
);

/*
Student Table:

*/

CREATE TABLE Student
(StudentID int(8) unsigned not null auto_increment primary key,
FirstName varchar(50) null,
LastName varchar(50) null,
Email varchar(50) null,
ProfilePicture varchar(100) null,
Password char(32) null,
Grade int null,
UserID int(8) unsigned null,
constraint fk_user3 foreign key (UserID) references User(UserID)
);

/*
Administrator Table:

*/

CREATE TABLE Administrator 
(AdminID int(8) unsigned not null auto_increment primary key,
FirstName varchar(50) null,
LastName varchar(50) null,
Email varchar(50) null,
Password char(32) null,
ProfilePicture varchar(100) null,
Contact varchar(20) null,
UserID int(8) unsigned null,
constraint fk_user4 foreign key (UserID) references User(UserID)
);

/*
User Table:
TO DO:
- address the permission field, how are we storing the permissions exactly
This table does not seem useful, if we intend to see the user type to determine 
the access permisions then we can just query each of the user tables looking for
the type of the user and the "permissions" struct can then exist only there.

*/

/*CREATE TABLE Thutong .People.User
(UserID int not null primary key,
)
GO*/

/*
Question Table:
TO DO:
- investigate where 100 characters for the file links would be sufficient, especially for growth
*/

/*----------------------------------------------------------------------DATABASE FOR USE CASE 1 ENDED HERE ---------------------*/

/*
	- add other columns
*/

CREATE TABLE Topic (
TopicID int(8) usigned not null auto_increment primary key,

);

CREATE TABLE Question 
(QuestionID int(8) unsigned not null auto_increment primary key,
Question text null,
Media varchar(100) null,
Type varchar(50) null
);
/*
Quiz Table:
TO DO:
- resolve the actual structure of the struct: questions and solutions,
or rather, make tables for each these purposes.
*/

CREATE TABLE Quiz 
(QuizID int(8) unsigned not null auto_increment primary key,
TopicID int(8) unsigned null,
constraint fk_topic foreign key (TopicID) references Topic(TopicID),
QuestionID int(8) unsigned null,
constraint fk_question foreign key (QuestionID) references Question(QuestionID)
);



/*
Solution Table:

*/

CREATE TABLE Solution 
(SolutionID int(8) unsigned not null auto_increment primary key,
Solution text null,
Media varchar(50) null
);

/*
Marks Table
- TO DO:
- compound key using studentID and quizID
*/

CREATE TABLE Marks 
(Mark int not null,
QuizID int(8) unsigned null,
constraint fk_quiz foreign key (QuizID) references Quiz(QuizID),
StudentID int(8) unsigned null,
constraint fk_student foreign key (StudentID) references Student(StudentID),
constraint primary key (QuizID,StudentID)
);

/*
Academic Content Table:
- TO DO:
- change the type field and make table so each type of document and a media schema as
well i.e. document, image/diagram, video, audio
 - Details: the value for the date time (7) is the fsp= fractional seconds precision
*/

CREATE TABLE AcademicContent 
(ContentID int(8) unsigned not null auto_increment primary key,
Type varchar(50) null,
Name varchar(50) null,
Description text null,
DateCreated datetime(7) not null,
TopicID int(8) unsigned null,
constraint fk_topic2 foreign key (TopicID) references Topic(TopicID)
);

/*
ICT Fact Table:
- what is the content field exactly?
ans: pictures, text describing that content? Get and example of the top before opening a text editor
*/

CREATE TABLE ICTFact 
(FactID int(8) unsigned not null auto_increment primary key,
Content varchar(50) null,
Description text null
);

/*
ICT Progress Table:
- investigate how to handle combined keys in the table
*/

CREATE TABLE ICTProgress 
(Viewed boolean null,
FactID int(8) unsigned null,
constraint fk_fact foreign key (FactID) references ICTFact(FactID),
StudentID int(8) unsigned null,
constraint fk_student2 foreign key (StudentID) references Student(StudentID),
constraint primary key (FactID,StudentID)
);

/*
Advertiser Table:

*/

/*CREATE TABLE Advertiser 
(AdvertiserID int not null primary key,
Email varchar(50) null,
Name varchar(50) null,
Contant varchar(20) null,
AddressID )
GO*/