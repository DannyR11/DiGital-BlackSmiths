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